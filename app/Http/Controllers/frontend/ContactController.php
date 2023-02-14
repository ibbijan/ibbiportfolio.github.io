<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){
      $contact =  new Contact();
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->subject = $request->subject;
      $contact->message = $request->message;
      $contact->status = 0;
      $contact->save();

      return redirect()->back();


    }


    public function PendingContact(){

      $contacts = Contact::where('status',0)->latest()->get();

      return view('backend.contact.view',compact('contacts'));
    }


    public function ApproveContact(){

      $contacts = Contact::where('status',1)->latest()->get();

      return view('backend.contact.approve',compact('contacts'));
    }



    public function PendingApproveContact($id){

    $contact =  Contact::findOrFail($id);
    $contact->status = 1;
    $contact->save();

    return redirect()->back();


    }
}
