<x-mail::message>
# Thank you for your message, we will contact you soon!

## From the contact form:

- Name: **{{ $name }}**
- Email: **{{ $email }}**
- Phone: **{{ $phone }}**

## Message:

<x-mail::panel>
<pre>{{ $message }}</pre>
</x-mail::panel>

<x-mail::button :url="config('app.url')" color="success">
Visit the website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
