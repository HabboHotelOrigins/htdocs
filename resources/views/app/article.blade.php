<x-layout.app>
    @push('title', $article->name)
    
    <section class="max-w-[1200px] mx-auto">
        <x-app.navigation />
        
        <div class="bg-[var(--content)] border border-black shadow-content rounded-xl">
            <div class="p-4">
                <h1 class="text-white font-semibold italic">{{ $article->created_at->format('F d, Y') }}</h1>
                <h1 class="text-black font-semibold text-xl">{{ $article->name }}</h1>
                <h1 class="text-white">{{ $article->desc }}</h1>
            </div>
            <hr class="border-[var(--content-border)]">
            <div class="p-4">
                {!! $article->content !!}
            </div>
        </div>
    </section>
</x-layout.app>