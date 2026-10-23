<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $profile = config('portfolio');

        return view('portfolio', [
            'p' => $profile,
            'hasResume' => is_file(public_path($profile['resume_file'])),
        ]);
    }

    public function contact(Request $request): RedirectResponse
    {
        // Bots fill in the hidden "website" field; quietly pretend it worked.
        if (filled($request->input('website'))) {
            return redirect()->to(route('home').'#contact')->with('contact_status', 'sent');
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'organization' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        try {
            Mail::to(config('portfolio.email'))->send(new ContactMessage($data));
        } catch (Throwable $e) {
            Log::error('Contact form mail failed', ['error' => $e->getMessage()]);

            return redirect()->to(route('home').'#contact')
                ->withInput()
                ->with('contact_status', 'failed');
        }

        return redirect()->to(route('home').'#contact')->with('contact_status', 'sent');
    }
}
