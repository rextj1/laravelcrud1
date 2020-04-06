<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="{{Request::is('Home')? 'active': ''}}">
      <a class="nav-link" href="Home">Home</a>
    </li>
    <li class="{{Request::is('Home')? 'active': ''}}">
      <a class="nav-link" href="/todos">Todo Lists</a>
    </li>
    <li class="{{Request::is('todo/create')? 'active': ''}}">
      <a class="nav-link" href="/todo/create">Create Todo</a>
    </li>
  </ul>
</nav>