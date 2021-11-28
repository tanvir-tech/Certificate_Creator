@component('mail::message')
# Hi, {{$name}}

{{$message}}
<br>
Thank you for registering in our seminar.

@component('mail::button', ['url' => 'https://www.occ.com/'])
Visit site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
