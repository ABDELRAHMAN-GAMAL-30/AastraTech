<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\SentEmail;
use App\Models\Email;
use App\Models\EmailCategory;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'recipient' => 'required|email',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Send the email
        Mail::send([], [], function ($message) use ($data) {
            $message->to($data['recipient'])
                    ->subject($data['subject'])
                    ->setBody($data['body'], 'text/html');
        });

        // Store the email in the sent_emails table
        SentEmail::create([
            'recipient' => $data['recipient'],
            'subject' => $data['subject'],
            'body' => $data['body'],
            'status' => 'sent',
            'sent_at' => now(),
        ]);

        return response()->json(['message' => 'Email sent successfully.']);
    }

public function categorizeEmail(Email $email)
{
    // Example categorization logic
    if (strpos($email->body, 'support') !== false) {
        $category = EmailCategory::where('name', 'Support')->first();
        $email->category()->associate($category);
    } elseif (strpos($email->body, 'sale') !== false) {
        $category = EmailCategory::where('name', 'Sales')->first();
        $email->category()->associate($category);
    }

    $email->save();
}

}
