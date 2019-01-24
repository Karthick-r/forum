<nav class="blue darken-3">
    <div class="container">
        <div class="nav-wrapper">
          <a href="{{ url('/') }}" class="brand-logo center">Forum</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
         
        </div>
    </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        @if (Auth::check())
      

<li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" class="btn blue">
        Logout
    </a>
</li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    @else
<li> <a href="{{ route('login') }}">Login</a></li>
<li>  <a href="{{ route('register') }}">Register</a></li>
    @endif
        <li><a href="{{ url('/') }}">Home</a></li>

      </ul>