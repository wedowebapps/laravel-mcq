@extends('layouts.app')

@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                        <div class="auth-box card">
                            <div class="card-block">
                                {!! csrf_field() !!}
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">{{ __('Login') }}</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input  id="email" type="email" class="form-control" name="email">

                                    <label class="float-label">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-primary">
                                    <input  id="password" type="password"  class="form-control" name="password">
                                    
                                    <label class="float-label">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                @if($errors->any())
                                    <span class="text-md-red" style="color:red;">
                                    <strong>{{$errors->first()}}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="forgot-phone text-right float-right">
                                            <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Login') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
