<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|max:5000',
        ]);

        // Log the contact submission
        Log::info('Contact form submission', $validated);

        // Send email notification
        try {
            Mail::raw(
                "New contact form submission from csreno.com:\n\n" .
                "Name: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Phone: " . ($validated['phone'] ?? 'Not provided') . "\n" .
                "Service: " . ($validated['service'] ?? 'Not specified') . "\n\n" .
                "Message:\n{$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('info@csreno.com')
                         ->subject('New Quote Request - ' . $validated['name'])
                         ->replyTo($validated['email'], $validated['name']);
                }
            );
        } catch (\Exception $e) {
            Log::error('Failed to send contact email', ['error' => $e->getMessage()]);
        }

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
