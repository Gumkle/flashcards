@extends('layouts.frontpage.layout')
@section('content')
    <main role="main" class="inner cover">
        <h1 class="cover-heading">{{__('Learn with us!')}}</h1>
        <p class="lead">{{__('Through learning with us and with our app you can easily forget about all your problems with learning! Join us now!')}}</p>
        <p class="lead text-center">
        <div class="row">
            <div class="col-md-6 col-12">
                <a href="{{route('login')}}" class="btn btn-lg btn-secondary my-1 w-100">{{__('Sign in!')}}</a>
            </div>
            <div class="col-md-6 col-12">
                <a href="{{route('register')}}" class="btn btn-lg btn-secondary my-1 w-100">{{__('Sign up!')}}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{route('repositories.index')}}" class="text-dark small">{{__('Or start without account!')}}</a>
            </div>
        </div>
        </p>
    </main>
@endsection