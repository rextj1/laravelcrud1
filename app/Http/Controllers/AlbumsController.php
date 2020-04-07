<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumsController extends Controller
{
    //
    public function index(){
        $albums= Album::all();
        return view('album.index',compact('albums'));
    }

    public function create(){
        return view('album.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'cover_image'=>'image|max:1999'
        ]);

        // get file name with extension
        $fileNameWith= $request->file('cover_image')->getClientOriginalName();
        // get just the file name with the extension
         $filename= pathinfo($fileNameWith,PATHINFO_FILENAME);
        // get extension only
        $extension= $request->file('cover_image')->getClientOriginalExtension();
        // create new file name with the extension
        $filenameToStore= $filename.'-'.time().'.'.$extension;
         //upload image
        $path= $request->file('cover_image')->storeAs('/public/album_cover', $filenameToStore);
         
         // upload image
         $album= new Album;
         $album->name= $request->get('name');
         $album->description= $request->get('description');
         $album->cover_image= $filenameToStore;
         $album->save();
         return redirect('/albums')->with('success','Album Created');
    }

    public function show($id){
        $album= Album::find($id);
        return view('album.show',compact('album'));
    }

    public function edit($id){
        $album= Album::find($id);
        return view('album.edit',compact('album'));
    }

    public function update(Request $request,$id)
    {
        $album= Album::find($id);
        $file_name= $request->cover_image;
        if($file_name == $request->get('cover_image')){
            $album->name= $request->get('name');
            $album->description= $request->get('description');
            $album->cover_image= $request->get('cover_image');
            $album->save();
            return redirect('/albums')->with('success','Album Updated');
            
        }elseif($request->hasFile('cover_image')){
            if(Storage::delete('public/album_cover/'.$album->cover_image)){
                $album->delete();
                // get file name with extension
                $fileNameWith= $request->file('cover_image')->getClientOriginalName();
                // get just the file name with the extension
                $filename= pathinfo($fileNameWith,PATHINFO_FILENAME);
                // get extension only
                $extension= $request->file('cover_image')->getClientOriginalExtension();
                // create new file name with the extension
                $filenameToStore= $filename.'-'.time().'.'.$extension;
                    //upload image
                $path= $request->file('cover_image')->storeAs('/public/album_cover', $filenameToStore);
                    
                // upload image
                $album->name= $request->get('name');
                $album->description= $request->get('description');
                $album->cover_image= $filenameToStore;
                $album->save();
                return redirect('/albums')->with('success','Album Updated');
           }else{
               
               $album->name= $request->get('name');
                $album->description= $request->get('description');
                $album->cover_image= Storage::exists('public/album_cover/'.$album->cover_image);
                $album->save();
                return redirect('/albums')->with('success','Album Updated');
           }
        }
        
    }

        public function destroy(Request $request,$id)
        {
           
            $album= Album::find($id);
            if(Storage::delete('public/album_cover/'.$album->cover_image)){
                 $album->delete();
            }
            return redirect('/albums')->with('success','Album deleted');
        }

}
