<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Const_contact;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function insertContact(Request $request){
        $insert_contact = new \App\Models\Const_contact();
        $insert_contact->nom = $request->get('name');
        $insert_contact->prenom = $request->get('prenom');
        $insert_contact->telephone = $request->get('telephone');
        $insert_contact->email = $request->get('email');
        $insert_contact->sujet = $request->get('subject');
        $insert_contact->message = $request->get('formmessage');
        $insert_contact->save();
    }

    public function store(Request $request)
    {
        $contactName = $request->get('prenom');
        $contactEmail = $request->get('email');
        $contactSubject = $request->get('subject');
        $contactMessage = $request->get('formmessage');

        Mail::to($contactEmail)
            ->send(new sendEmail([
                'prenom' => $contactName,
                'email' => $contactEmail,
                'message' => $contactMessage
            ]));

        if(! Mail::failures()){
            $this->insertContact($request);
            return redirect('contact')->with('success','Le formulaire a bien été envoyer');
        }else{
            return redirect('contact')->with('error','Problème lors de l' + 'envoie du formulaire essayer plus tard');
        }
    }
}
