@extends('welcome')

@section('title','Applicant Register')

@section('css')
    
@endsection

@section('content')


<section class="job-bg user-page">
    <div class="container  text-center">
        <div class="user-account-content">
            <div class="user-account job-user-account">
                <h2>Create An Account</h2>
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation"><a @if(request()->is('register')) class="active" @endif href="{{ route('register') }}">Find A Job</a></li>
                        <li role="presentation"><a href="{{ route('employer.register') }}">Post A Job</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel">
                            <form action="{{ route('register') }}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" name="first_name" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="" placeholder="First Name">

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="" placeholder="Last Name">

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="" placeholder="Email">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="" placeholder="Password">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" value="" placeholder="Confirm Password">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <button type="submit" class="btn">Registration</button>
                            </form>
                        </div>

                    </div>
            </div>
        </div><!-- user-login -->	
    </div><!-- container -->
</section><!-- signup-page -->


    
@endsection



@section('js')

    
@endsection