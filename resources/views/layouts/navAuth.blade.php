<ul class="nav navbar-nav navbar-right">

  @if(Auth::guest())
    <li>
      <a href="{{ route('register') }}">
        <span class="glyphicon glyphicon-user"></span> Register
      </a>
    </li>
    <li>
      <a href="{{ route('login') }}">
        <span class="glyphicon glyphicon-log-in"></span> Login
      </a>
    </li>
  @else
    <li>
      <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" style="background:none; border:none;">
          <span class="glyphicon glyphicon-log-out"></span> Logoff
        </button>
      </form>
    </li>
  @endif

</ul>