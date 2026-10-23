<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_portfolio_page_renders_resume_content(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Jaideep Kaur')
            ->assertSee('Dnata')
            ->assertSee('Jet Airways')
            ->assertSee('Flight Dispatcher (FD Ops) Certification');
    }

    public function test_contact_form_sends_mail(): void
    {
        Mail::fake();

        $this->post('/contact', [
            'name' => 'Recruiter',
            'email' => 'recruiter@example.com',
            'message' => 'We would love to schedule an interview.',
        ])->assertRedirect(route('home').'#contact');

        Mail::assertSent(ContactMessage::class, fn ($mail) => $mail->hasTo(config('portfolio.email')));
    }

    public function test_contact_form_validates_input(): void
    {
        Mail::fake();

        $this->post('/contact', ['name' => '', 'email' => 'not-an-email', 'message' => 'hi'])
            ->assertSessionHasErrors(['name', 'email', 'message']);

        Mail::assertNothingSent();
    }

    public function test_honeypot_submissions_are_dropped(): void
    {
        Mail::fake();

        $this->post('/contact', [
            'name' => 'Bot',
            'email' => 'bot@example.com',
            'message' => 'Spam spam spam spam',
            'website' => 'http://spam.example',
        ])->assertRedirect();

        Mail::assertNothingSent();
    }
}
