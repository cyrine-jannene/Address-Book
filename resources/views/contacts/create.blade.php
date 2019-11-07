@extends('layouts.app')
@section('title','Add new contact')
    

@section('content')



<div class="row">
    <div class="col-12"><h1>Addd new contact</h1></div>
</div>
    <div class="row">
        <div class="col-12">
                <form action="/contacts" method="POST" >
                    <label for="first_name">First Name</label>
                        <div class="form-group" class="pb-2">
                        <input type="text" name="first_name" value="{{ old('first_name') ?? $contact->first_name }}"  class="form-control">
                            <div>{{ $errors->first('first_name')}}</div>
                        </div>
                
                        <label for="last_name">Last Name</label>
                        <div class="formform-group">
                            <input type="text" name="last_name" value="{{ old('last_name') ?? $contact->last_name}}"  class="form-control">
                            <div>{{ $errors->first('last_name')}}</div>
                        </div>
                        <br>
                        
                        <div class="panel panel-footer" >
                            <table class="table table-bordered" id="table">
                                    
                                <tr>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Address</td>
                                    <th><a href="#" onclick="add();"><i class="glyphicon glyphicon-plus">Add</i></a></th>
                                       <script> function add(){
                                           var tr = '<tr>'+
                                           '<td><input type="email" name="email" class="form-control" value="{{ old("email") ?? $contact->email}}"><div>{{ $errors->first("email")}}</div></td>'+
                                            '<td><input type="text" name="phone" value="{{ old("phone") ?? $contact->phone}}"  class="form-control"><div>{{ $errors->first("phone")}}</div></td> '+
                                            '<td><input type="text" name="address" value="{{ old("address") ?? $contact->address }}"  class="form-control"><div>{{ $errors->first("address")}}</div></td>'+
                                            '<td><a href="#" class="btn btn-danger remove"><span class="glyphicon glyphicon-remove">×</span></a></td>'+
                                           '<tr>';
                                           $('#table').append(tr);
                                       };
                                        $('.remove').live('click', function(){
                                            $(this).parent().parent().remove(); 
                                        });
                                       </script>     
                                </tr>
                                    
                                <tr>
                                    <td><input type="email" name="email" class="form-control" value="{{ old('email') ?? $contact->email}}">
                                    <div>{{ $errors->first('email')}}</div></td>
                                    
                                    <td><input type="text" name="phone" value="{{ old('phone') ?? $contact->phone}}"  class="form-control">
                                    <div>{{ $errors->first('phone')}}</div></td>   
                                   
                                    <td><input type="text" name="address" value="{{ old('address') ?? $contact->address }}"  class="form-control">
                                    <div>{{ $errors->first('address')}}</div></td>
        
                                    <td></td>
                                </tr>
                                    
                            </table>
                            <div id="result"></div>
                        </div>
                            

   
                
                        <label for="city">City</label>
                        <div class="form-group">
                            <input type="text" name="city" value="{{ old('city') ?? $contact->city }}"   class="form-control">
                            <div>{{ $errors->first('city')}}</div>
                        </div>
                
                        <label for="zip_code">Zip code</label>
                        <div class="form-group">
                            <input type="text" name="zip_code" value="{{ old('zip_code') ?? $contact->zip_code }}"  class="form-control">
                            <div>{{ $errors->first('zip_code')}}</div>
                        </div>
                        @csrf
                        
                        
                                
                        <button type="submit" class="btn btn-primary">Add contact</button>
                        
                    </form>
        </div>
    </div>

    

@endsection


