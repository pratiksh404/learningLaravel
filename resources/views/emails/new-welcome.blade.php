@component('mail::message')
# Doctype Nepal

Welcome new user.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name','Doctype Nepal') }}
@endcomponent
