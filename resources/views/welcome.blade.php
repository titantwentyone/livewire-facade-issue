<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
    </head>
    <body class="antialiased">
        <livewire:cache/>
        <livewire:request/>
        <livewire:cart/>
    @livewireScripts
    </body>
</html>
