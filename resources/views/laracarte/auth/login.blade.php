@extends('laracarte.layouts.master', ['title'=>'Login'])

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="spaced-top-bottom">
                <h3 class="text-center">Welcome Back !</h3>
            </div>
            <div class="content">
            <form action="{{route('laracarte.auth.login')}}" method="post" novalidate>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" value="{{old('email')}}" required class="form-control radius grey-bg">
                        {!! $errors->first('email', "<span class='text-danger'>:message</span>") !!}
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" name="password" id="password" required class="form-control radius grey-bg">
                        {!! $errors->first('password', "<span class='text-danger'>:message</span>")!!}
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="control-label"> Remember Me</label>
                    </div>
                    
                    <input class="btn btn-primary radius" type="submit" value="Sing in with Github" name="github-connexion">
                    
                    <input class="btn btn-warning radius" type="submit" value="Reset password" name="reset-password">
                    
                    <div class="form-group spaced">
                        <input type="submit" value="Login" class="btn btn-primary btn-block radius">
                    </div>
                </form>
                <a href="{{route('laracarte.password.email')}}">Forgot your password ?</a> |
                <a href="{{route('laracarte.auth.register')}}">New on Laracarte? Create an account !</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="spaced-top-bottom">
                <h3 class="text-center">Sign up now for FREE</h3>
            </div>
            <div class="content">
                <ul>
                    <li>
                        Place yourself on the map
                    </li>
                    <li>  
                        Be a part of the community
                    </li>
                </ul>
                <p class="right"><a href="{{route('laracarte.about')}}">Read more</a></p>
            </div>
        </div>
    </div>
</div>
@stop