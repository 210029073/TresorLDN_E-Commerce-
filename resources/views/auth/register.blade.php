@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="user_first_name" type="text" class="form-control @error('user_first_name') is-invalid @enderror" name="user_first_name" value="{{ old('user_first_name') }}" required autocomplete="user_first_name" autofocus>

                                @error('user_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="user_last_name" type="text" class="form-control @error('user_last_name') is-invalid @enderror" name="user_last_name" value="{{ old('user_last_name') }}" required autocomplete="user_last_name" autofocus>

                                @error('user_last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_address_line_1" class="col-md-4 col-form-label text-md-end">{{ __('Customer Address Line 1') }}</label>

                            <div class="col-md-6">
                                <input id="user_address_line_1" type="text" class="form-control @error('user_address_line_1') is-invalid @enderror" name="user_address_line_1" value="{{ old('user_address_line_1') }}" required autocomplete="user_address_line_1" autofocus>

                                @error('user_address_line_1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_address_line_2" class="col-md-4 col-form-label text-md-end">{{ __('Customer Address Line 2') }}</label>

                            <div class="col-md-6">
                                <input id="user_address_line_2" type="text" class="form-control @error('user_address_line_2') is-invalid @enderror" name="user_address_line_2" value="{{ old('user_address_line_2') }}" required autocomplete="user_address_line_2" autofocus>

                                @error('user_address_line_2')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_postcode" class="col-md-4 col-form-label text-md-end">{{ __('Customer Postcode') }}</label>

                            <div class="col-md-6">
                                <input id="user_postcode" type="text" class="form-control @error('user_postcode') is-invalid @enderror" name="user_postcode" value="{{ old('user_postcode') }}" required autocomplete="user_postcode" autofocus>

                                @error('user_postcode')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
