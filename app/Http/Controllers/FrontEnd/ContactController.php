<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10|numeric',
            'message' => 'required',
            'url' => 'required'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->mobile,
            'url' => $request->url,
            'comments' => $request->message,
        ]);
        // Mail::send(
        //     'email',
        //     [
        //         'name' => $request->get('name'),
        //         'email' => $request->get('email'),
        //         'comment' => $request->get('comment')
        //     ],
        //     function ($message) {
        //         $message->from('info@marketelevateresearch.com');
        //         $message->to('dileepars13@gmail.com', 'Dileep')
        //             ->subject('This is test mail');
        //     }
        // );
        if ($contact) {
            return redirect('/contact')->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        }
    }
}
