@component('mail::message')
# plan 

* learn laravel
* learn vue js 2
* be awesome 

The body of your message.

@component('mail::button', ['url' => 'fmovies.pe'])
checkout movies
@endcomponent


@component('mail::panel', ['url' => 'fmovies.pe'])
Some inspirational quote goes here ...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
