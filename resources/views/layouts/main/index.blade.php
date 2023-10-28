{{-- Главный Шаблон --}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Moderna Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- Подключаем стили CSS --}}
    @include('layouts.main.style')

</head>

<body>

{{-- Подключаем Header для всех страниц --}}
@include('layouts.main.header')

{{-- Подключаем регистрацию/авторизацию пользователя --}}
@include('layouts.unreg_user')

{{-- Подключаем Карусель на главной странице --}}
@include('carousel.carousel')




{{-- Тут будет отображаться основной контент layouts/carousel/content.blade.php --}}
@yield('content')

{{-- Подключаем Footer --}}
@include('layouts.main.footer')

{{-- Подключаем скрипты --}}
@include('layouts.main.script')

</body>

</html>
