@component('mail::message')
Your Transaction has been Confirmed

Hi {{$checkout->user->name}}
<br>
Your Transaction has been confirmed, now you can enjoy the benefits of <b>{{$checkout->Camp->title}}</b>camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
