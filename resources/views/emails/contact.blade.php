<x-mail::message>
# IContact from {{$name}}

{{$content}}

<x-mail::button :url="''">
Visit us
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
