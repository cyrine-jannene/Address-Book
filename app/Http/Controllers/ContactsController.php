<?php

namespace App\Http\Controllers;

use App\Contact;
use DB;
use Illuminate\Http\Request;

class ContactsController extends Controller
{


    public function list(Request $request){
       

        $contacts = Contact::all();
            

        return view('contacts.index', ['contacts' => $contacts]);
        
    }

    public function create(){
        $contact = new Contact();
        return view('contacts.create', compact('contact'));
    }

    public function store(){

        $data = request()->validate([
            'first_name'=> 'required|min:3',
            'last_name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required|integer',
            'address'=> 'required',
            'city'=> 'required',
            'zip_code'=> 'required|integer',
        ]);

        $contact = new Contact();
        $contact->first_name= request('first_name');
        $contact->last_name= request('last_name');
        $contact->email= request('email');
        $contact->phone= request('phone');
        $contact->address= request('address');
        $contact->city= request('city');
        $contact->zip_code= request('zip_code');
        $contact->save();

        return redirect('contacts');
    }

    public function show(Contact $contact){
        
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact){
        return view('contacts.edit', compact('contact'));
    }

    public function update(Contact $contact){
        $data = request()->validate([
            'first_name'=> 'required|min:3',
            'last_name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required|integer',
            'address'=> 'required',
            'city'=> 'required',
            'zip_code'=> 'required|integer',
        ]);
        $contact->update($data);
        return redirect('contacts/'. $contact->id);
    }

    public function destroy(Contact $contact){
        $contact->delete();

        return redirect('contacts/');
    }

    public function search(Request $request){
        $search = $request->get('search');

        $contacts = DB::table('contacts')->where('first_name', 'like', '%' .$search. '%')->paginate(5);
        return view('contacts.index', ['contacts' => $contacts]);
    }
    

}
