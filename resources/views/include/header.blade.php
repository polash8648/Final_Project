<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        @auth               
        <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li> 
        @if(auth()->user()->role =="Admin")
       
          <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">User List</a>          
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('jobindex')}}">Job List</a>          
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="{{route('joblist')}}">Dashboard</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>    
        @endif
         @if(auth()->user()->role =="User")
       
          <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}">User Panel</a>
        </li> 
      <li class="nav-item">
          <a class="nav-link" href="{{route('job')}}">Job Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('joblist')}}">Dashboard</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li> 
        @endif
         
        @else 
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}">Registration</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('joblist')}}">Dashboard</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li> 
        @endauth
      </ul>
      <span class="navbar-text"> @auth {{auth()->user()->name}} @endauth  </span>
    </div>
  </div>
</nav>