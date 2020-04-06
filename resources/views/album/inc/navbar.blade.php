<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="{{Request::is('Home')? 'active': ''}}">
      <a class="nav-link" href="/Home">Home</a>
    </li>
    <li class="{{Request::is('album/create')? 'active': ''}}">
      <a class="nav-link" href="/album/create">Create Album</a>
    </li>
    <li class="{{Request::is('photos')? 'active': ''}}">
      <a class="nav-link" href="/photos">Album Photos</a>
    </li>
    <li class="{{Request::is('albums')? 'active': ''}}">
      <a class="nav-link" href="/albums">Album</a>
    </li>
  </ul>
</nav>

