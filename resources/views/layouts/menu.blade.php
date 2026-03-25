<li class="nav-item">
    <a href="{{ route('members.index') }}"
       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <p>Members</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courts.index') }}"
       class="nav-link {{ Request::is('courts*') ? 'active' : '' }}">
        <p>Courts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('bookings.index') }}"
       class="nav-link {{ Request::is('bookings*') ? 'active' : '' }}">
        <p>Bookings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


