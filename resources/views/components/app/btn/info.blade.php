@props(['submit' => false, 'href' => '#'])

@if($submit === true)
<button 
    type="submit"
    class="text-center bg-[var(--btn-info)] hover:bg-[var(--btn-info-hover)] active:bg-[var(--btn-info-active)] border-2 border-[var(--btn-info-border)] hover:border-[var(--btn-info-hover-border)] active:border-[var(--btn-info-active-border)] shadow-[0_3px_0_1px_rgba(0,0,0,.3)] active:shadow-[0_1px_0_1px_rgba(0,0,0,.3)] transform active:translate-y-[2px] rounded px-4 py-2"
>
    <div class="flex gap-1">
        {{ $slot }}
    </div>
</button>
@else
<a 
    href="{{ $href }}" 
    class="text-center bg-[var(--btn-info)] hover:bg-[var(--btn-info-hover)] active:bg-[var(--btn-info-active)] border-2 border-[var(--btn-info-border)] hover:border-[var(--btn-info-hover-border)] active:border-[var(--btn-info-active-border)] shadow-[0_3px_0_1px_rgba(0,0,0,.3)] active:shadow-[0_1px_0_1px_rgba(0,0,0,.3)] transform active:translate-y-[2px] rounded px-4 py-2"
>
    <div class="flex gap-1">
        {{ $slot }}
    </div>
</a>
@endif
