<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PhotosController extends Controller
{
    //
    public function index()
    {
        $photos= Photo::all();
        return view('photo.index',compact('photos'));
    }

    public function create($album_id)
    {
        return view('photo.create',compact('album_id'));
    }
    public function store(Request $request)
    {   $this->validate($request,[
        'title'=>'required',
        'photo'=>'image|max:1999'
        ]);

        // get file name with extension
        $fileNameWith= $request->file('photo')->getClientOriginalName();
        // get just the file name with the extension
        $filename= pathinfo($fileNameWith,PATHINFO_FILENAME);
        // get extension only
        $extension= $request->file('photo')->getClientOriginalExtension();
        // create new file name with the extension
        $filenameToStore= $filename.'-'.time().'.'.$extension;
        //upload image
        $path= $request->file('photo')->storeAs('/public/photo/'.$request->input('album_id'), $filenameToStore);
        
        // upload image
        $photo= new Photo;
        $photo->title= $request->input('title');
        $photo->album_id= $request->input('album_id');
        $photo->description= $request->input('description');
        $photo->size= $request->file('photo')->getClientMimeType();
        $photo->photo= $filenameToStore;
        $photo->save();
        
     return redirect('/album/'.$request->input('album_id'))->with('success', 'Photo created');
    }

    public function show($id){
        $photo= Photo::find($id);
        return view('photo.show',compact('photo'));
    }

    public function destroy($id){
        $photo= Photo::find($id);
        if(Storage::delete('public/photo/'.$photo->album_id.'/'.$photo->photo)){
             $photo->delete();
             unlink('public/photo/'.$photo->album_id);
        }
        return redirect('photos')->with('success','Photo deleted');
    }
}
