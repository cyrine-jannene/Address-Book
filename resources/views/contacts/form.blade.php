
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
                     
                     
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Email</td>
                                            <td>Phone</td>
                                            <td>Address</td>
                                            <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus">+</i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <tr>
                        <td><input type="email" name="email" class="form-control" value="{{ old('email') ?? $contact->email}}">
                            <div>{{ $errors->first('email')}}</div></td>
                        <td><input type="text" name="phone" value="{{ old('phone') ?? $contact->phone}}"  class="form-control">
                            <div>{{ $errors->first('phone')}}</div></td>   
                          <td><input type="text" name="address" value="{{ old('address') ?? $contact->address }}"  class="form-control">
                            <div>{{ $errors->first('address')}}</div></td>
   
                        <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove">-</i></a></td>
                        </tr>
                                        </tr>
                                    </tbody>
                                   
                                </table>
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
                        
                        
                        <script type="text/javascript">
                        $('.addRow').on('click',function(){
                            addRow();
                        })
                            function addRow()
                            {
                                var tr='<tr>'+
                                '<td><input type="text" name="email_name[]" class="form-control" required=""></td>'+
                                '</tr>';
                                $('tbody').append(tr);
                            };
                            </script>