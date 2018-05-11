@component('mail::message')
# Nouveau message de {{ $message->name }}

    @component('mail::panel')
        {{ $message->email }}
    @endcomponent

    @component('mail::panel')
        {{ $message->body }}
    @endcomponent

@endcomponent
