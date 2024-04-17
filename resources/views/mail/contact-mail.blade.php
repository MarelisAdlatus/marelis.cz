<x-mail::message>
# @lang('app.contact_mail_thanks')

## @lang('app.contact_mail_form_title'):

- @lang('app.contact_mail_form_name'): **{{ $name }}**
- @lang('app.contact_mail_form_email'): **{{ $email }}**
- @lang('app.contact_mail_form_phone'): **{{ $phone }}**

## @lang('app.contact_mail_message_title'):

<x-mail::panel>
<pre>{{ $message }}</pre>
</x-mail::panel>

<x-mail::button :url="config('app.url')" color="success">
@lang('app.contact_mail_button')
</x-mail::button>

@lang('app.contact_mail_greeting'),<br>
{{ config('app.name') }}
</x-mail::message>
