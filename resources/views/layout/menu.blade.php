@if(Auth::user()->role == 'admin')
@include('layout.menu-admin')
@elseif(Auth::user()->role == 'user')
@include('layout.menu-user')
@endif
