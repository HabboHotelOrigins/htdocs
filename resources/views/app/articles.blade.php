<x-layout.app>
    @push('title', 'Articles')
    
    <section class="max-w-[1200px] mx-auto">
        <x-app.navigation />
        
        <div class="bg-[var(--content)] border border-black shadow-content rounded-xl p-4 md:p-6">
            <div class="flex flex-col gap-6">
                @isset($articles)
                    @foreach($articles as $article)
                        <div class="flex gap-4">
                            <div class="min-w-[100px] w-[100px] min-h-[100px] h-[100px] shadow-[_3px_3px_rgba(0,0,0,.3)]">
                                <img src="{{ $article->img }}" alt="">
                            </div>
                            <div class="flex flex-col gap-2">
                                <div>
                                    <a href="{{ route('app.article', ['article' => $article->id]) }}" class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">{{ $article->name }}</a>
                                    <p class="max-sm:text-sm text-red-700 font-semibold italic">{{ $article->created_at->format('F d, Y') }}</p>
                                </div>
                                <p class="max-sm:text-sm">
                                    {{ $article->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </section>
</x-layout.app>