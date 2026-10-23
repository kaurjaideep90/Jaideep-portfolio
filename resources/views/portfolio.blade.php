@extends('layouts.app')

@section('content')
<header class="nav" id="top">
    <div class="container nav__inner">
        <a href="#top" class="brand" aria-label="{{ $p['name'] }}, back to top">
            <span class="brand__mark">JK</span>
            <span class="brand__name">{{ $p['name'] }}</span>
        </a>

        <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="nav-menu">
            <span class="sr-only">Open menu</span>
            <span class="nav__bars" aria-hidden="true"></span>
        </button>

        <nav class="nav__menu" id="nav-menu" aria-label="Main">
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#expertise">Expertise</a>
            <a href="#credentials">Credentials</a>
            <a href="#contact" class="btn btn--gold btn--sm">Get in touch</a>
        </nav>
    </div>
</header>

<main id="main">
    {{-- Hero --}}
    <section class="hero">
        <svg class="hero__route" viewBox="0 0 1200 600" preserveAspectRatio="none" aria-hidden="true">
            <path d="M-20 520 C 300 420, 520 120, 1220 80" />
        </svg>

        <div class="container hero__grid">
            <div class="hero__copy">
                <p class="eyebrow eyebrow--light"><span class="dot"></span> Open to aviation &amp; FBO roles in Toronto</p>
                <h1 class="hero__title">{{ $p['name'] }}</h1>
                <p class="hero__role">{{ $p['title'] }}</p>
                <p class="hero__tagline">{{ $p['tagline'] }}</p>

                <div class="hero__actions">
                    <a href="#contact" class="btn btn--gold">Contact me @include('partials.icon', ['name' => 'arrow'])</a>
                    @if ($hasResume)
                        <a href="{{ asset($p['resume_file']) }}" class="btn btn--ghost" download>@include('partials.icon', ['name' => 'download']) Download résumé</a>
                    @else
                        <a href="#experience" class="btn btn--ghost">View experience</a>
                    @endif
                </div>
            </div>

            <aside class="pass reveal" aria-label="Profile summary styled as a boarding pass">
                <div class="pass__main">
                    <div class="pass__head">
                        <span class="pass__label">Boarding pass</span>
                        <span class="pass__class">Service class: First contact</span>
                    </div>

                    <div class="pass__field">
                        <span class="pass__key">Passenger</span>
                        <span class="pass__val">KAUR / JAIDEEP</span>
                    </div>

                    <div class="pass__route">
                        <div>
                            <span class="pass__code">DXB</span>
                            <span class="pass__city">Dubai</span>
                        </div>
                        <div class="pass__plane" aria-hidden="true">
                            <span></span>@include('partials.icon', ['name' => 'plane'])<span></span>
                        </div>
                        <div class="pass__to">
                            <span class="pass__code">YYZ</span>
                            <span class="pass__city">Toronto</span>
                        </div>
                    </div>

                    <div class="pass__grid">
                        <div><span class="pass__key">Role</span><span class="pass__val">Customer Service</span></div>
                        <div><span class="pass__key">Gate</span><span class="pass__val">Ground Ops</span></div>
                        <div><span class="pass__key">Systems</span><span class="pass__val">Amadeus · Sabre</span></div>
                        <div><span class="pass__key">Shifts</span><span class="pass__val">24 / 7</span></div>
                    </div>
                </div>

                <div class="pass__stub">
                    <span class="pass__key">Status</span>
                    <span class="pass__status">Ready to board</span>
                    <div class="pass__barcode" aria-hidden="true"></div>
                    <span class="pass__mono">JK-2007-YYZ</span>
                </div>
            </aside>
        </div>

        <div class="container">
            <dl class="stats">
                @foreach ($p['stats'] as $stat)
                    <div class="stats__item reveal">
                        <dt>{{ $stat['label'] }}</dt>
                        <dd>{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    {{-- About --}}
    <section class="section" id="about">
        <div class="container about">
            <div class="about__intro reveal">
                <p class="eyebrow">About</p>
                <h2 class="section__title">Calm at the gate. <em>Precise</em> on the ramp.</h2>
                @foreach ($p['summary'] as $paragraph)
                    <p class="lead">{{ $paragraph }}</p>
                @endforeach
            </div>

            <div class="about__highlights reveal">
                <h3 class="card-title">Highlights of qualifications</h3>
                <ul class="checklist">
                    @foreach ($p['highlights'] as $highlight)
                        <li>@include('partials.icon', ['name' => 'check']) {{ $highlight }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- Experience --}}
    <section class="section section--tint" id="experience">
        <div class="container">
            <div class="section__head reveal">
                <p class="eyebrow">Flight log</p>
                <h2 class="section__title">Aviation &amp; ground services experience</h2>
            </div>

            <ol class="timeline">
                @foreach ($p['aviation_experience'] as $job)
                    <li class="timeline__item reveal">
                        <div class="timeline__marker"><span>{{ $job['code'] }}</span></div>
                        <article class="job">
                            <header class="job__head">
                                <div>
                                    <h3 class="job__role">{{ $job['role'] }}</h3>
                                    <p class="job__company">{{ $job['company'] }} <span>· {{ $job['location'] }}</span></p>
                                </div>
                                <span class="chip chip--mono">{{ $job['period'] }}</span>
                            </header>
                            <ul class="job__points">
                                @foreach ($job['points'] as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </article>
                    </li>
                @endforeach
            </ol>

            <div class="section__head section__head--sub reveal">
                <h3 class="section__subtitle">Additional professional experience</h3>
                <p class="muted">Customer-facing, technical and coordination roles that sharpened service under pressure.</p>
            </div>

            <div class="cards cards--2">
                @foreach ($p['additional_experience'] as $job)
                    <article class="card reveal">
                        <span class="chip chip--mono">{{ $job['period'] }}</span>
                        <h4 class="card__title">{{ $job['role'] }}</h4>
                        <p class="card__meta">{{ $job['company'] }} · {{ $job['location'] }}</p>
                        <ul class="job__points job__points--compact">
                            @foreach ($job['points'] as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Aviation knowledge --}}
    <section class="section" id="expertise">
        <div class="container">
            <div class="section__head reveal">
                <p class="eyebrow">Expertise</p>
                <h2 class="section__title">Aviation industry knowledge</h2>
                <p class="muted">Working within the safety and regulatory frameworks that keep every turnaround on time and every passenger safe.</p>
            </div>

            <div class="cards cards--3">
                @foreach ($p['knowledge'] as $item)
                    <article class="card card--icon reveal">
                        <span class="card__icon">@include('partials.icon', ['name' => $item['icon']])</span>
                        <h3 class="card__title">{{ $item['title'] }}</h3>
                        <p class="muted">{{ $item['text'] }}</p>
                    </article>
                @endforeach
            </div>

            <div class="skills">
                <article class="card reveal">
                    <span class="card__icon">@include('partials.icon', ['name' => 'monitor'])</span>
                    <h3 class="card__title">Technical skills</h3>
                    <ul class="tags">
                        @foreach ($p['technical_skills'] as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="card reveal">
                    <span class="card__icon">@include('partials.icon', ['name' => 'chat'])</span>
                    <h3 class="card__title">Languages</h3>
                    <ul class="langs">
                        @foreach ($p['languages'] as $lang)
                            <li>
                                <span class="langs__name">{{ $lang['name'] }}</span>
                                <span class="langs__meter" role="img" aria-label="{{ $lang['level'] }}">
                                    @for ($i = 1; $i <= 3; $i++)
                                        <i class="{{ $i <= $lang['score'] ? 'on' : '' }}"></i>
                                    @endfor
                                </span>
                                <span class="langs__level">{{ $lang['level'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            </div>
        </div>
    </section>

    {{-- Credentials --}}
    <section class="section section--navy" id="credentials">
        <div class="container">
            <div class="section__head reveal">
                <p class="eyebrow eyebrow--light">Credentials</p>
                <h2 class="section__title">Professional development &amp; education</h2>
            </div>

            <div class="creds">
                @foreach ($p['certifications'] as $cert)
                    <article class="cred reveal">
                        <span class="cred__icon">@include('partials.icon', ['name' => 'badge'])</span>
                        <div>
                            <span class="chip chip--gold">{{ $cert['status'] }}</span>
                            <h3 class="cred__title">{{ $cert['title'] }}</h3>
                            <p class="cred__meta">{{ $cert['issuer'] }} · {{ $cert['detail'] }}</p>
                        </div>
                    </article>
                @endforeach

                <article class="cred reveal">
                    <span class="cred__icon">@include('partials.icon', ['name' => 'book'])</span>
                    <div>
                        <span class="chip chip--outline">{{ $p['education']['year'] }}</span>
                        <h3 class="cred__title">{{ $p['education']['title'] }}</h3>
                        <p class="cred__meta">{{ $p['education']['school'] }}</p>
                    </div>
                </article>
            </div>

            <div class="ready reveal">
                <div class="ready__head">
                    <span class="card__icon card__icon--gold">@include('partials.icon', ['name' => 'clock'])</span>
                    <h3>Ready for the 24/7 operation</h3>
                </div>
                <ul class="checklist checklist--light">
                    @foreach ($p['availability'] as $line)
                        <li>@include('partials.icon', ['name' => 'check']) {{ $line }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section class="section" id="contact">
        <div class="container contact">
            <div class="contact__info reveal">
                <p class="eyebrow">Contact</p>
                <h2 class="section__title">Let’s talk about your <em>next departure</em>.</h2>
                <p class="lead">Hiring for passenger service, FBO or ground operations in the Toronto area? I’d be glad to hear from you.</p>

                <ul class="contact__list">
                    <li>
                        <span class="card__icon">@include('partials.icon', ['name' => 'mail'])</span>
                        <div><span class="contact__key">Email</span><a href="mailto:{{ $p['email'] }}">{{ $p['email'] }}</a></div>
                    </li>
                    <li>
                        <span class="card__icon">@include('partials.icon', ['name' => 'phone'])</span>
                        <div><span class="contact__key">Phone</span><a href="tel:{{ preg_replace('/[^0-9+]/', '', $p['phone']) }}">{{ $p['phone'] }}</a></div>
                    </li>
                    <li>
                        <span class="card__icon">@include('partials.icon', ['name' => 'pin'])</span>
                        <div><span class="contact__key">Location</span><span>{{ $p['location'] }}</span></div>
                    </li>
                </ul>

                @if ($hasResume)
                    <a href="{{ asset($p['resume_file']) }}" class="btn btn--navy" download>@include('partials.icon', ['name' => 'download']) Download résumé (PDF)</a>
                @endif
            </div>

            <form class="form reveal" method="POST" action="{{ route('contact') }}" novalidate>
                @csrf

                @if (session('contact_status') === 'sent')
                    <div class="alert alert--ok" role="status">Thank you, your message has been sent. I’ll reply as soon as possible.</div>
                @elseif (session('contact_status') === 'failed')
                    <div class="alert alert--err" role="alert">Sorry, the message couldn’t be sent right now. Please email me directly at <a href="mailto:{{ $p['email'] }}">{{ $p['email'] }}</a>.</div>
                @endif

                <div class="form__hp" aria-hidden="true">
                    <label for="website">Leave this field empty</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form__row">
                    <div class="field">
                        <label for="name">Your name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="100" autocomplete="name">
                        @error('name')<p class="field__error">{{ $message }}</p>@enderror
                    </div>
                    <div class="field">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required maxlength="150" autocomplete="email">
                        @error('email')<p class="field__error">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="field">
                    <label for="organization">Company / organization <span class="muted">(optional)</span></label>
                    <input type="text" id="organization" name="organization" value="{{ old('organization') }}" maxlength="150" autocomplete="organization">
                    @error('organization')<p class="field__error">{{ $message }}</p>@enderror
                </div>

                <div class="field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required minlength="10" maxlength="3000">{{ old('message') }}</textarea>
                    @error('message')<p class="field__error">{{ $message }}</p>@enderror
                </div>

                <button type="submit" class="btn btn--gold btn--block">Send message @include('partials.icon', ['name' => 'arrow'])</button>
            </form>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer__inner">
        <p><span class="brand__mark brand__mark--sm">JK</span> © {{ date('Y') }} {{ $p['name'] }} · {{ $p['location'] }}</p>
        <a href="#top" class="footer__top">Back to top ↑</a>
    </div>
</footer>
@endsection
