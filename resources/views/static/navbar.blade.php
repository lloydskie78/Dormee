<nav class="navbar navbar-expand-md  set-top shadowed text-white navbar-colored">
    <a class="navbar-brand" href="{{URL::to('index')}}">
        <span style="font-face: Blacklisted;">D</span><i class="text-green fa fa-key fa-spin faa-float animated" style="margin-top: -9px;"></i><span style="font-face: Blacklisted;">R</span><span class="text-green" style="font-face: Barneh;">MEE</span>

    </a>
    <button type="button" class="navbar-toggle mb-3" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-lg fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto navbar-inverse">
             @guest
                <li class="nav-item">
                    <a class="nav-link" href="login">{{ ('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="register">{{ ('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    Howdy, 
                    <a href="{{URL::to('dashboard')}}" class="mx-2 mr-5">
                        {{ Auth::user()->username }} 
                    </a>
                </li>
                <li class="nav-item pl-2">
                    
                    <a href="{{URL::to('dorms')}}" class="mx-2 mr-5">
                        Dorms
                    </a>
                    <a href="{{URL::to('roommates')}}">
                        {{ ('Roommates') }}
                    </a>

                </li>

                <li class="nav-item pl-2">
                    
                    <a href="{{URL::to('logout')}}" class="ml-5">
                        {{ ('Logout') }}
                    </a>
                </li>
                @endguest
        </ul>
      
    </div>
</nav>

