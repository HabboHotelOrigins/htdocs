@props(['href' => '#', 'icon' => '#', 'iconHover' => '#'])

<a href="{{ $href }}" x-data="{ hover: false }" @mouseover="hover = true" @mouseout="hover = false">
    <img class="min-h-[20px] min-w-[20px] h-[20px] w-[20px]" x-bind:style="hover && { display: 'none' }" src="{{ $icon }}" alt="">
    <img class="min-h-[20px] min-w-[20px] h-[20px] w-[20px]" style="display:none" x-bind:style="!hover && { display: 'none' }" src="{{ $iconHover }}" alt="">
</a>