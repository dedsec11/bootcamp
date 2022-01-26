@component('mail::message')
# Register camp : {{ $checkout->camp->title }}

hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->user->name}}</b>, please see payment intruction by click the button below.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks, <br>
{{ config('app.name') }}
@endcomponent