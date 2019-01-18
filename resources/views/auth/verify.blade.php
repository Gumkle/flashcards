@extends('layouts.frontpage.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="mr-auto">
                        {{ __('Verify Your Email Address') }}
                    </div>
                    <div class="ml-auto">
                        <a href="{{route('welcome')}}" class="x-button">
                            X
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Congratulations! You just created an account! However you\'ll be granted service\'s full access after you confirm your email.') }}
                    {{ __('If you did not receive the email') }}, <a class="text-info" href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
