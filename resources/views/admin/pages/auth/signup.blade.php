@extends('admin.layouts.master_auth')

@section('title', 'Sign Up')

@section('content')


        <div class="sign-in-wrapper">
            <div class="sign-container">
                <div class="text-center">
                    <h2 class="logo"><img src="/public/admin/imgs/logo-dark.png" width="130px" alt=""/></h2>
                    <h4>Register to Admin</h4>
                </div>

                <form class="sign-in-form" role="form" action="http://megadin.lab.themebucket.net/login.html">
                    
                {!! Form::open(['url'=>action('AccessController@postSignup'), 'method'=>'post', 'enctype'=> 'multipart/form-data']) !!}

                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group text-center">
                        <label class="i-checks">
                            <input type="checkbox">
                            <i></i>
                        </label>
                          Agree the terms and policy
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Register</button>
                    <p class="text-muted text-center help-block"><small>Already have an account?</small></p>
                    <a class="btn btn-md btn-default btn-block" href="login.html">Login</a>
                </form>
                <div class="text-center copyright-txt">
                    <small>MegaDin - Copyright © 2017</small>
                </div>
            </div>
        </div>
    
@endsection