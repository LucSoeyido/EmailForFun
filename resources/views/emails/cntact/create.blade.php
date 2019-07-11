@component('mail::message')
# Introduction

- {{ $nom }}
- {{ $email }}
- {{ $phone }}


@component('mail::button', ['url' => ''])
{{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
