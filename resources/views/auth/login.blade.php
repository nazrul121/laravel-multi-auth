@extends('layouts.app')

@section('content')

<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #7EBFDB;">
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
            <a href="#" class="text-center mb-15">
                <img src="{{request()->get('header_logo')}}" alt="logo" class="h-70px" />
            </a>
      
            <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">
                {{request()->get('system_title')}} <br /> {{request()->get('mother_company')}}</h3>
           
        </div>
        
        <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(https://preview.keenthemes.com/keen/theme/demo3/dist/assets/media/svg/illustrations/payment.svg)"></div>

    </div>

    <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">

        <div class="d-flex flex-column-fluid flex-center">

            <div class="login-form login-signin">
                <form class="form" method="POST" action="{{ route('login') }}">@csrf
           
                    <div class="pb-13 pt-lg-0 pt-5">
                        <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Please Login</h3>      
                        @if(session()->get('alert')) <p class="bg-danger text-white p-3 border border-warning border-3 text-center">{{session()->get('alert')}}</p> @endif         
                    </div>
                  
                    <div class="form-group">
                        <label class="font-size-h6 font-weight-bolder text-dark">Username <small>[Phone, email etc]</small></label>
                        <input class="form-control form-control-solid h-auto p-6 rounded-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="off" />
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="d-flex justify-content-between mt-n5">
                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                        </div>
                        <input class="form-control form-control-solid h-auto p-6 rounded-lg @error('password') is-invalid @enderror" type="password" name="password"  autocomplete="off" value="12345678"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-primary" for="remember">
                                        <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : 'checked' }}>
                                        <span></span> {{ __('Remember my login') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a href="{{ route('password.request') }}" class="text-info">Forgot Password ?</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-angle-double-right"></i> Sign In</button>
                                
                        </div>
                        
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

@endsection
