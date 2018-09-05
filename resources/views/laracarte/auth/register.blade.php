@extends('laracarte.layouts.master', ['title'=> "Register"])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="spaced-top-bottom">
                            <h3 class="text-center">Be part of the community</h3>
                        </div>
                    </div>
                </div>

                <form action="{{route('laracarte.auth.register')}}" method="post" novalidate>
                    {{ csrf_field()}}
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <input type="text" class="form-control radius grey-bg" name="username" id="username" value="{{old('username')}}" required>
                                {!!$errors->first('username', "<span class='text-danger'>:message</span>")!!}
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email Address</label>
                                <input type="email" class="form-control radius grey-bg" name="email" id="email" value="{{old('email')}}" required>
                                {!!$errors->first('email', "<span class='text-danger'>:message</span>")!!}
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control radius grey-bg" name="password" id="password"  required>
                                {!!$errors->first('password', "<span class='text-danger'>:message</span>")!!}
                            </div>
                            <div class="form-group">
                                <label for="website" class="control-label">Website/Blog <i>(Starting with http:// or https://)</i></label>
                                <input type="text" class="form-control radius grey-bg" name="website" id="website" value="{{old('website')}}" required>
                                {!!$errors->first('website', "<span class='text-danger'>:message</span>")!!}
                            </div>
                            
                        </div>
                            
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control radius grey-bg" value="{{old('name')}}" required>
                                {!!$errors->first('name', "<span class='text-danger'>:message</span>")!!}
                            </div>                                    
                            <div class="form-group">
                                <label for="address" class="control-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control radius grey-bg" value="{{old('address')}}" required>
                                {!!$errors->first('address', "<span class='text-danger'>:message</span>")!!}
                            </div>                                    
                            <div class="form-group">
                                <label for="password_confirm" class="control-label">Password Confirmation</label>
                                <input type="password" name="password_confirm" id="password_confirm" class="form-control radius grey-bg" value="{{old('password_confirm')}}" required>
                                {!!$errors->first('password_confirm', "<span class='text-danger'>:message</span>")!!}
                            </div>
                            <div class="form-group">
                                <label for="github_profile" class="control-label">Github Profile <i>(Starting with http:// or https://)</i></label>
                                <input type="text" name="github_profile" id="github_profile" class="form-control radius grey-bg" value="{{old('github_profile')}}" required>
                                {!!$errors->first('github_profile', "<span class='text-danger'>:message</span>")!!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sign in with github" name="github" class="btn btn-primary radius">
                        <input type="submit" value="Register" name="register" class="btn btn-warning radius">
                    </div>
                    <p>Already have an account? <a href="{{route('laracarte.auth.register')}}">Log in!</a></p>
                </form>

                
                
            </div>
            <div class="col-md-4">
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