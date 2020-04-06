<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="{{Request::is('Home')? 'active': ''}}">
      <a class="nav-link" href="/Home">Home</a>
    </li>
    <li class="{{Request::is('about')? 'active': ''}}">
      <a class="nav-link" href="/about">About</a>
    </li>
    <li class="{{Request::is('showcase')? 'active': ''}}">
      <a class="nav-link" href="/showcase">Showcase</a>
    </li>
    <li class="{{Request::is('contact')? 'active': ''}}">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
    <li class="{{Request::is('page')? 'active': ''}}">
      <a class="nav-link" href="/page">Contact</a>
    </li>
    <li class="{{Request::is('todos')? 'active': ''}}">
      <a class="nav-link" href="/todos">Todo Lists</a>
    </li>
    <li class="{{Request::is('listings')? 'active': ''}}">
      <a class="nav-link" href="/listings">Business Listings</a>
    </li>
    <li class="{{Request::is('albums')? 'active': ''}}">
      <a class="nav-link" href="/albums">Album Home</a>
    </li>
  </ul>
</nav>

