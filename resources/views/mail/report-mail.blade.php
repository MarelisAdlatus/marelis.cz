<x-mail::message>
# @lang('mail.report_introduction')

## @lang('mail.report_form_title'):

- @lang('mail.report_form_group'): **{{ $group }}**
- @lang('mail.report_form_item'): **{{ $item }}**
- @lang('mail.report_form_name'): **{{ $name }}**
- @lang('mail.report_form_email'): **{{ $email }}**
- @lang('mail.report_form_option'): **{{ $option }}**

## @lang('mail.report_title'):

<x-mail::panel>
{!! $message !!}
</x-mail::panel>

<x-mail::button :url="config('app.url')" color="success">
@lang('mail.report_button')
</x-mail::button>

@lang('mail.report_greeting'),<br>
{{ config('app.name') }}
</x-mail::message>
