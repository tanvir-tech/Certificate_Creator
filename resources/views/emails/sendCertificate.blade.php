@component('mail::message')
# Hi, {{$name}}

Thank you for participating in our seminar. Please check the attachment for the certificate.

@component('mail::button', ['url' => 'https://www.occ.com/'])
Visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
