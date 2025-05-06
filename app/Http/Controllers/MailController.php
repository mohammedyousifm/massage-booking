<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContatUsMail;

class MailController extends Controller
{
    public function store(Request  $request)
    {

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        try {
            // ✅ Send welcome email
            $data = $request->only(['name', 'email', 'phone', 'message']);
            Mail::to($data['email'])->send(new ContatUsMail($data));

            // Redirect with a success message
            return redirect()->route('successEmails');
        } catch (\Exception $e) {
            // Redirect with a success message
            return redirect()->route('error');
        }
    }
}
