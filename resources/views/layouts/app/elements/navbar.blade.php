<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{route('welcome')}}">{{env('APP_NAME')}}</a>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>

        @if(Auth::check())
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <input class="form-control form-control-sm mx-1 btn-sm btn-secondary" type="submit" value="{{__('Sign out')}}">
        </form>
        @else
            <a href="{{route('login')}}" class="btn btn-secondary mx-1 btn-sm">{{__('Sign in')}}</a>
            <a href="{{route('register')}}" class="btn btn-secondary mx-1 btn-sm">{{__('Sign up')}}</a>
        @endif

    </div>
</nav>