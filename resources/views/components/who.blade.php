
@if (Auth::guard('web')->check())
    <p class="text-success">
        <b>You are logged in as USER</b> 
    </p>
@else
    <p class="text-danger">
        <b>Your are logged out as USER</b> 
    </p>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">
        <b>You are logged in as ADMIN</b> 
    </p>
@else
    <p class="text-danger">
        <b>Your are logged out as ADMIN</b> 
    </p>
@endif