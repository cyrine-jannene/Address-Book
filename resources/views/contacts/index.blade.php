@extends('layouts.app')
@section('title','Address book')
    

@section('content')

<div class="row">
    <div class="col-12"><h1>Contact List</h1></div>
    <p class="col-12 lead font-weight-bolder" ><a href="contacts/create">Add new contact</a></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<div class="col-md-4 float-md-right pb-4">

    <form action="/search" method="get">
      
      <div class="input-group">
      <input type="search" class="form-control" name="search" placeholder="Search users" >  
      
      <span class="input-group-prepend">
          <button class ="btn btn-primary" type="submit">Search</button>   
      </span>
    </div>
  </form>


</div>

    

    




<table class="table">
        
        <thead class="thead-dark">
          <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Zip Code</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
          <tr>
            <td>
              <a href="/contacts/{{ $contact->id}}"> {{$contact->first_name}} </a>
            </td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->city }}</td>
            <td>{{ $contact->zip_code }}</td>
          </tr>
          
        </tbody>
        @endforeach
      </table>
     

@endsection