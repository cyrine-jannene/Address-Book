@component('mail::message')

#Thank you for your message

<strong>Name</strong> {{ $data['name'] }}
<strong>email</strong> {{ $data['email'] }}
<strong>message</strong> 
     
{{ $data['message'] }}
@endcomponent
