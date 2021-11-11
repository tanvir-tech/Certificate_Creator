@component('mail::message')
# Hi, {{$name}}

Thank you for registering in our seminar.
Our seminar will be held on 20 November 2021 at 10.00 am. Your presence is pleasure to us.

@component('mail::button', ['url' => 'https://www.occ.com/'])
Visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
