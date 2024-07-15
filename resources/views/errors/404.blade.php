<x-layout.app>
    @push('title', '404')
    
    <section class="max-w-[1200px] mx-auto">
        <div class="bg-[var(--content)] border border-black shadow-content rounded-xl p-4">
            <div class="flex flex-col items-center gap-2">
                <div>
                    <img src="{{ Vite::asset('resources/img/frank_looking.png') }}" alt="">
                </div>
                <h1 class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">
                    Oh BOBBA! Page not found.
                </h1>
                <p>
                    Frank can't find the page you're looking for. Please check the URL or try starting over from the <a class="text-blue-600 hover:text-blue-800 underline" href="{{ route('app.index') }}">Habbo front page</a>.
                </p>
            </div>
        </div>
    </section>
</x-layout.app>