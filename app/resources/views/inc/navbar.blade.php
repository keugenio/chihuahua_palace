<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">CP</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('/') ? 'active':''}}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('about') ? 'active':''}}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item {{Request::is('contact') ? 'active':''}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Todos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/todos">All Todos</a>
            <a class="dropdown-item" href="/todos/create">Create Todo</a>
          </div>
      </li>                
    </ul>
    <div>
      @if (session('status'))
          <a class="nav-link" href="/">Hello</a>
          {{ session('status') }}
      @else
        <a class="nav-link" href="/">Login</a>
      @endif 
    </div>    
  </div>
</nav>

