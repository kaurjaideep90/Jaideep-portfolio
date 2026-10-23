<?php

/*
|--------------------------------------------------------------------------
| Portfolio Content
|--------------------------------------------------------------------------
|
| Every piece of text shown on the site lives here, so the portfolio can be
| updated without touching any Blade templates. Contact details can also be
| overridden from the .env file.
|
*/

return [

    'name' => 'Jaideep Kaur',
    'title' => 'Aviation Customer Service & Ground Operations Professional',
    'tagline' => 'Passenger-first service, built on safety, precision and composure, at Toronto Pearson (YYZ) and Dubai International (DXB).',
    'location' => 'Toronto, ON',
    'email' => env('PORTFOLIO_EMAIL', 'kaurjaideep90@gmail.com'),
    'phone' => env('PORTFOLIO_PHONE', '+1 437 435 9935'),

    // Drop the PDF at public/files/Jaideep-Kaur-Resume.pdf and the download
    // buttons appear automatically.
    'resume_file' => 'files/Jaideep-Kaur-Resume.pdf',

    'stats' => [
        ['value' => '2007', 'label' => 'Serving travellers since'],
        ['value' => 'YYZ · DXB', 'label' => 'International hubs'],
        ['value' => '3', 'label' => 'Languages spoken'],
        ['value' => 'Amadeus · Sabre', 'label' => 'GDS platforms'],
    ],

    'summary' => [
        'Dedicated aviation customer service professional with hands-on experience in passenger handling, ramp and gate operations, and ground services coordination at Toronto Pearson International Airport (YYZ) and Dubai International Airport (DXB).',
        'Skilled in check-in, boarding, baggage and weight compliance, and flight crew liaison, with hands-on proficiency in the Amadeus and Sabre GDS platforms, under strict IATA, ICAO and Transport Canada safety standards.',
        'Known for discreet, first-contact service to VIP, high-profile and general travellers, backed by call centre and technical support experience. Bilingual in English and Punjabi with working Hindi, and currently completing Transport Canada Flight Dispatcher certification to deepen aviation operations expertise.',
    ],

    'highlights' => [
        'Passenger Check-In, Boarding & Deplaning',
        'Ramp, Apron & Gate Operations',
        'IATA/ICAO Safety & Regulatory Compliance',
        'Flight Crew & Ground Crew Liaison',
        'Baggage Handling & Weight/Balance Awareness',
        'VIP & High-Profile Passenger Service',
        'Flight Disruption & Irregular Ops (IROPS) Support',
        'Bilingual Service (English/Punjabi)',
        'First-Contact Resolution & De-escalation',
        'High-Volume Inbound Call Handling',
        'Amadeus & Sabre GDS Proficiency',
        'Schedule Adherence in Fast-Paced Environments',
    ],

    'knowledge' => [
        ['icon' => 'globe', 'title' => 'IATA & ICAO Standards', 'text' => 'Ground handling standards and airline safety regulations.'],
        ['icon' => 'shield', 'title' => 'Transport Canada CARs', 'text' => 'Awareness of the Canadian Aviation Regulations.'],
        ['icon' => 'cone', 'title' => 'Ramp & Apron Safety', 'text' => 'Ramp and apron safety protocols, including FOD prevention.'],
        ['icon' => 'scale', 'title' => 'Dangerous Goods & W&B', 'text' => 'Dangerous goods (DG) awareness and weight & balance compliance.'],
        ['icon' => 'lock', 'title' => 'Airport Security', 'text' => 'Security and restricted area access procedures.'],
        ['icon' => 'cloud', 'title' => 'Dispatch & Weather', 'text' => 'Flight dispatch fundamentals and weather interpretation (FD Ops / FD Met, in progress).'],
    ],

    'aviation_experience' => [
        [
            'company' => 'Dnata',
            'location' => 'Dubai International Airport, U.A.E.',
            'code' => 'DXB',
            'role' => 'Customer Service Agent, Flight Management Unit (FMU)',
            'period' => 'Mar 2014 – Dec 2014',
            'points' => [
                'Facilitated passenger flow through check-in, boarding and disembarkation, consistently meeting on-time departure targets.',
                'Processed baggage acceptance, tagging, and weight & balance compliance in strict adherence to IATA regulations and airline safety standards.',
                'Coordinated with flight crew, ramp agents, ground staff and airport authorities to support seamless aircraft turnaround.',
                'Delivered discreet, attentive service to passengers with special needs, unaccompanied minors, and VIP/high-profile guests.',
                'Performed gate operations including boarding announcements, document verification and jetway coordination.',
                'Maintained accurate flight records and conducted radio communications with aircraft as required.',
            ],
        ],
        [
            'company' => 'Jet Airways',
            'location' => 'Toronto Pearson International Airport, ON',
            'code' => 'YYZ',
            'role' => 'Customer Service Executive',
            'period' => 'Aug 2007 – May 2010',
            'points' => [
                'Managed passenger check-in, ticketing and fare assessment in full compliance with airline policies.',
                'Handled flight disruptions, rebookings and complex passenger inquiries while maintaining composure under pressure.',
                'Facilitated gate boarding procedures and delivered clear passenger announcements to support on-time departures.',
                'Liaised with dispatch, ramp operations and flight crew to support safe, efficient aircraft turnarounds.',
            ],
        ],
    ],

    'additional_experience' => [
        [
            'company' => 'NexHut',
            'location' => 'Remote',
            'role' => 'Virtual Assistant',
            'period' => 'Jan 2021 – Mar 2022',
            'points' => ['Coordinated client communications, scheduling and CRM records to maintain high customer satisfaction.'],
        ],
        [
            'company' => 'Maple Tours & Travels',
            'location' => 'Surat, India',
            'role' => 'Digital Media Marketing Specialist',
            'period' => 'Feb 2015 – Apr 2018',
            'points' => ['Supported travel bookings and provided accurate travel information to a multilingual client base.'],
        ],
        [
            'company' => 'Creditlink Marketing Group',
            'location' => 'Dubai, U.A.E.',
            'role' => 'Document Controller',
            'period' => 'Aug 2012 – Mar 2014',
            'points' => ['Verified and processed credit card application documents, ensuring accuracy and regulatory compliance.'],
        ],
        [
            'company' => 'Rogers Communications Inc.',
            'location' => 'Toronto, ON',
            'role' => 'Smartphone Technical Support Specialist',
            'period' => 'Jun 2010 – Nov 2011',
            'points' => [
                'Delivered high-volume inbound technical support for smartphones and wireless devices, achieving strong first-contact resolution rates.',
                'Resolved billing inquiries and service disputes with accuracy while maintaining strict schedule adherence.',
            ],
        ],
    ],

    'certifications' => [
        [
            'title' => 'Flight Dispatcher (FD Ops) Certification',
            'issuer' => 'Transport Canada',
            'detail' => 'Examination scheduled October 9, 2026',
            'status' => 'In progress',
        ],
        [
            'title' => 'Flight Dispatcher Meteorology (FD Met) Exam',
            'issuer' => 'Transport Canada',
            'detail' => 'Scheduled for late fall / winter 2026',
            'status' => 'In progress',
        ],
    ],

    'education' => [
        'title' => 'Ontario Secondary School Diploma',
        'school' => 'Oakwood Collegiate, Toronto, ON',
        'year' => '2002',
    ],

    'technical_skills' => [
        'Amadeus & Sabre (GDS / Airline Reservation Systems)',
        'Technical Support Tools',
        'CRM & Ticketing Systems',
        'Microsoft Office Suite (Word, Excel, Outlook)',
        'Internet Navigation & Web-Based Tools',
    ],

    'languages' => [
        ['name' => 'English', 'level' => 'Fluent', 'score' => 3],
        ['name' => 'Punjabi', 'level' => 'Fluent', 'score' => 3],
        ['name' => 'Hindi', 'level' => 'Working knowledge', 'score' => 2],
    ],

    'availability' => [
        'Available for shift work, including early mornings, evenings, weekends and statutory holidays, for 24/7 airport and FBO operations.',
        'Able to pass a criminal background check and obtain airport security clearance as required for aviation employment.',
        'Comfortable in fast-paced, safety-critical environments that call for discretion, professionalism and composure under pressure.',
        'Toronto resident, flexible to work on-site at Toronto Pearson International Airport (YYZ).',
    ],

];
