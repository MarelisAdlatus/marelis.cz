<x-mail::message>
# @lang('mail.contact_introduction')

## @lang('mail.contact_form_title'):

- @lang('mail.contact_form_name'): **{{ $name }}**
- @lang('mail.contact_form_email'): **{{ $email }}**
- @lang('mail.contact_form_phone'): **{{ $phone }}**

## @lang('mail.contact_message_title'):

<x-mail::panel>
<pre>{{ $message }}</pre>
</x-mail::panel>

<x-mail::button :url="config('app.url')" color="success">
@lang('mail.contact_button')
</x-mail::button>

@lang('mail.contact_greeting'),<br>
{{ config('app.name') }}
</x-mail::message>
