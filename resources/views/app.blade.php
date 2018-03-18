@include('elements.head')
<div class="nav-mobile-container">
    <li>
        <a href="/users/login" class="loginbox" data-ref="/at/amazon.co.uk">Log in</a>
    </li>
    <li>
        <a href="/users/signup" class="signupbox" data-ref="/at/amazon.co.uk">Sign up</a>
    </li>
</div>
<div id="layout">
    @include('elements.header')
    <div class="container main-container">
        <div class="row">
            @yield('main_content')
        </div>
    </div>
</div>
@include('elements.footer')