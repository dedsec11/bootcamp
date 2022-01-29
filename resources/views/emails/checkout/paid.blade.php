@component('mail::message')
# Your transaction has been confirmed.

Hi {{ $checkout->User->name }}


Your transaction has been confirmed, now you can enjoy the benefit <b>{{$checkout->Camp->title}}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
