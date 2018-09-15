@extends('laracarte.layouts.master', ['title'=> "Contact"])

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-md-2">
            <h1>Get In Touch</h1>
        <p>If you having trouble with this service, please <a href="mailto:{{config('app.email_admin')}}">ask for help</a>.</p>
            
            <form action="{{route('laracarte.contact.store')}}" method="post" novalidate>
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                <input type="text" name="name" id="name" required="required" value="{{ old('name')}}" class="form-control radius grey-bg {{$errors->has('name')?'has-error':'' }}">
                    {!! $errors->first("name", "<span class='text-danger'>:message</span>" ) !!}
                </div>
                <div class="form-group ">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" required="required" value="{{ old('email')}}" class="form-control radius grey-bg {{$errors->has('email')?'has-error':'' }}">
                    {!! $errors->first("email", "<span class='text-danger'>:message</span>" ) !!}
                </div>
                <div class="form-group " >
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea class="form-control radius grey-bg {{$errors->has('message')?'has-error':'' }}" name="message" id="message" cols="30" rows="10">{{ old('message')}}</textarea>
                    {!! $errors->first("message", "<span class='text-danger'>:message</span>" ) !!}
                </div>

                <div class="form-group" >
                    <input type="submit" class="btn btn-block btn-dark radius">
                </div>

            </form>


        </div>
    </div>
</div>

@stop

@push('footer_scripts')
@include('flashy::message')
@endpush