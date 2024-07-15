<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="/favicon.ico?1.0" type="image/vnd.microsoft.icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Habbo.pm - @stack('title')</title>
        <meta name="description" content="Habbo is one of the most popular virtual worlds on the planet! Meet new people and make new friends, plus with numerous user-created roleplaying groups focused on hospitals, police stations and intelligence agencies, there really is something for everyone.">

        <meta name="keywords" content="habbo, habbo hotel, habbo origins, habbo hotel origins, habbo retro, habbo retro origins, habbo.pm">
        <meta name="robots" content="index, follow"> 

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <style>
        body {
            background: url({{ Vite::asset('resources/img/background.gif') }});
        }

        .habbo_logo {
            background-image: url({{ Vite::asset('resources/img/sprite.png') }});
        }
    </style>
    <body class="min-h-screen flex flex-col">
        <nav class="z-50 h-[64px] text-white bg-[#335e7a] shadow-[0_2px_3px_rgba(6,19,25,.7)] flex gap-2 justify-center items-center px-2">
            @guest
                <form class="flex gap-1" action="{{ route('app.login.post') }}" method="POST">
                    @csrf
                    
                    <x-app.input.normal :value="old('username')" id="username" name="username" placeholder="Username" required :error="isset($errors) && $errors->has('wrong')" />
                    <x-app.input.normal :value="old('password')" id="password" name="password" type="password" placeholder="Password" required :error="isset($errors) && ($errors->has('wrong') || $errors->has('password'))" />
                    <x-app.btn.info :submit="true">
                        <p>Login</p>
                    </x-app.btn.info>
                </form>
            @endguest

            @auth
                <div class="max-w-[200px] overflow-hidden bg-[var(--avatar)] border-2 border-[var(--avatar-border)] rounded shadow-[0_1px_0_2px_rgba(0,0,0,.3)] py-1 px-2">
                    <a class="hover:underline" href="#">{{ Auth::user()->username }}</a>
                </div>

                <div class="flex flex-col gap-1">
                    <x-app.btn.icon href="#" :icon="Vite::asset('resources/img/icons/settings.png')" :icon-hover="Vite::asset('resources/img/icons/settings_hover.png')" />
                    <x-app.btn.icon :href="route('app.logout')" :icon="Vite::asset('resources/img/icons/logout.png')" :icon-hover="Vite::asset('resources/img/icons/logout_hover.png')" />
                </div>
            @endauth

            <x-app.btn.success href="https://mega.nz/file/JvkzmaQA#u9XhpREj6m-kzWi1Vl4dN_La-V4Wo0Ot027qWR7_Eyw">
                <p class="max-[500px]:hidden uppercase">Download</p>
                <img class="min-h-[24px] min-w-[24px] h-[24px] w-[24px]" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
            </x-app.btn.success>
        </nav>

        <div class="relative max-w-[1920px] w-full mx-auto">
            <a href="/" class="habbo_logo"></a>
        </div>

        <main class="flex-grow py-8 px-2">
            {{ $slot }}
        </main>

        <footer class="text-white text-xs text-center p-2 pt-0">
            <p>
                Habbo.pm is a not for profit educational project.
            </p>
            <p>
                <span class="font-semibold">Sulake Corporation Ltd</span> and <span class="font-semibold">HABBO®</span> are independent trademarks and are in no way related to <span class="font-semibold">Habbo.pm</span>.
            </p>
            <p>
                All images used on this website are subject to the rights of <span class="font-semibold">Sulake Corporation Oy</span>.
            </p>
        </footer>
    </body>
</html>
