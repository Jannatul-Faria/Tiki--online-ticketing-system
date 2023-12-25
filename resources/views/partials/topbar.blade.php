<section class="nav">
    <div class="container">
        <div class="row py-2">
            <div class="col-md-6 text-light">
                <span class="text-success"><i class="fas fa-phone-alt"></i></span>
                +44 45678908 | 
                <span class="text-success"><i class="fas fa-envelope"></i></span>
                example@gmail.com
            </div>
            <div class="col-md-6 text-end">
                @if (Auth::check())
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <a href="" class="btn btn-sm btn-success"><i class="fas fa-sign-in-alt"></i> {{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Log Out</a>
                </div>
                @else
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-success"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Sign Up</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>