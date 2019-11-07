@extends('layouts.app')
@section('title','Edit Details for'. $contact->name)
    

@section('content')



<div class="row">
    <div class="col-12"><h1>Edit Details for {{$contact->name}}</h1></div>
</div>
    <div class="row">
        <div class="col-12">
        <form action="/contacts/{{ $contact->id }}" method="POST" >
                    @include('contacts.form')
                    @method('PATCH')
                                
                        <button type="submit" class="btn btn-primary">Save contact</button>
                        
                    </form>
        </div>
    </div>

    

@endsection