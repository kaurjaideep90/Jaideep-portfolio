<svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
@switch($name)
    @case('globe')
        <circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/>
        @break
    @case('shield')
        <path d="M12 3 4.5 6v5.5c0 4.6 3.2 8.4 7.5 9.5 4.3-1.1 7.5-4.9 7.5-9.5V6L12 3Z"/><path d="m9 12 2 2 4-4"/>
        @break
    @case('cone')
        <path d="M10 4h4l4 15H6L10 4Z"/><path d="M8.5 10h7M7.4 14.5h9.2M4 19h16"/>
        @break
    @case('scale')
        <path d="M12 4v16M7 20h10M5 7h14"/><path d="m5 7-3 6a3 3 0 0 0 6 0L5 7ZM19 7l-3 6a3 3 0 0 0 6 0l-3-6Z"/>
        @break
    @case('lock')
        <rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V8a4 4 0 0 1 8 0v3M12 15v2"/>
        @break
    @case('cloud')
        <path d="M7 18a4 4 0 0 1-.6-8 6 6 0 0 1 11.5 1.5A3.3 3.3 0 0 1 17.5 18H7Z"/><path d="M9 21l1-2M13 21l1-2"/>
        @break
    @case('plane')
        <path d="M21 15.5v-1.7l-8-5V4a1.5 1.5 0 0 0-3 0v4.8l-8 5v1.7l8-2.5V18l-2.5 1.8V21l4-1.1 4 1.1v-1.2L13 18v-5l8 2.5Z" fill="currentColor" stroke="none"/>
        @break
    @case('check')
        <path d="m5 12.5 4.5 4.5L19 7.5"/>
        @break
    @case('mail')
        <rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3.5 6.5 8.5 7 8.5-7"/>
        @break
    @case('phone')
        <path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/>
        @break
    @case('pin')
        <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/>
        @break
    @case('download')
        <path d="M12 4v11M7 10.5l5 5 5-5M5 20h14"/>
        @break
    @case('clock')
        <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>
        @break
    @case('badge')
        <circle cx="12" cy="9" r="5"/><path d="m9 13.5-1.5 7.5 4.5-2.5 4.5 2.5-1.5-7.5"/>
        @break
    @case('book')
        <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v15H6.5A2.5 2.5 0 0 0 4 20.5v-15Z"/><path d="M4 20.5A2.5 2.5 0 0 0 6.5 23H20v-5"/>
        @break
    @case('monitor')
        <rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/>
        @break
    @case('chat')
        <path d="M4 5h16v11H9l-5 4V5Z"/><path d="M8 9.5h8M8 12.5h5"/>
        @break
    @case('arrow')
        <path d="M5 12h14M13 6l6 6-6 6"/>
        @break
@endswitch
</svg>
