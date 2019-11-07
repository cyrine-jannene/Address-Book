@extends('layouts.app')
@section('title','Details for '. $contact->first_name)
    

@section('content')



    <div class="row">
        <div class="col-12"><h1>Details for  {{$contact->first_name}}</h1></div>
        <p  class="ml-5 mt-2 lead font-weight-bolder"><a href="/contacts/{{ $contact->id }}/edit">Edit</a></p>
        &nbsp;&nbsp;&nbsp;&nbsp;
    <form action="/contacts/{{$contact->id}}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>

    <div class="col-12">
    <p><strong>First name: </strong>{{ $contact->first_name }}</p>
    <p><strong>Last name: </strong>{{ $contact->last_name }}</p>
    <p><strong>Email: </strong>{{ $contact->email }}</p>
    <p><strong>Number phone: </strong>{{ $contact->phone }}</p>
    <p><strong>Address: </strong>{{ $contact->address }}</p>
    <p><strong>City: </strong>{{ $contact->city }}</p>
    <p><strong>Zip code: </strong>{{ $contact->zip_code }}</p>

    </div>
   

    

@endsection