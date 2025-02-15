@php
    $isUserProfileNotCompleted = App\Helper\Helper::isUserProfileNotCompleted();
@endphp
@if ($isUserProfileNotCompleted)
    <div class="custom-style-border w-100 mb-40 text-center" id="emailMessage">
        <span id="verifyMessage">
            <img src="{{URL('images/bell-icon.gif')}}" class="ht-45" id="loaderGif">
            Complete your profile to get all notification about properties.
            <a href="{{route('user.profile')}}"><b>Click here!!</b></a>
        </span>
    </div>
@endif

 