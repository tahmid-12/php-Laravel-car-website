@props(['color', 'bgColor' => 'white'])

<div {{ $attributes->merge(['lang' => 'ka'])->class("card card-text-$color card-bg-$bgColor")}}>
    <div >
    </div>
    {{ $slot }}
    <div class="card-footer"></div>
</div>
