<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>

<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1">

@vite('resources/js/app.js')

<title>{{ config('app.name') }}</title>

<div id=js-app></div>

</html>
