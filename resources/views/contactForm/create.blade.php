@extends('layouts.app')
@section('title','Contact us')
    

@section('content')


    <h1>Contact us</h1>
    <form action="/contact_us" method="POST">

        <label for="name">Name</label>
        <div class="form-group" class="pb-2">
            <input type="text" name="name" value="{{ old('name')  }}"  class="form-control">
            <div>{{ $errors->first('name')}}</div>
        </div>

        <label for="email">Email</label>
        <div class="form-group">
            <input type="text" name="email" value="{{ old('email') }}"   class="form-control">
            <div>{{ $errors->first('email')}}</div>
        </div>
    
        <label for="message">Message</label>
        <div class="formform-group">
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="{{ old('email') }}"></textarea>
            <div>{{ $errors->first('message')}}</div>
        </div>

        @csrf
        <button type="submit" class="btn btn-primary mt-2">Send Message</button>
    </form>
@endsection