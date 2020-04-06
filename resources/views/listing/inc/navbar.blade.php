<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="{{Request::is('Home')? 'active': ''}}">
      <a class="nav-link" href="Home">Home</a>
    </li>
    <li class="{{Request::is('listings')? 'active': ''}}">
      <a class="nav-link" href="/listings">Business Listing</a>
    </li>
  </ul>
</nav>