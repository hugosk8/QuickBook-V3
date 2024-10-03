@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
$maxWidth = [
    'sm' => '',
    'md' => '',
    'lg' => '',
    'xl' => '',
    '2xl' => '',
][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            // Tous les types d'éléments focusables...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // Tous les éléments non désactivés...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    style="display: {{ $show ? 'block' : 'none' }};"
>
    <div
        x-show="show"
        x-on:click="show = false"
        x-transition:enter=""
        x-transition:enter-start=""
        x-transition:enter-end=""
        x-transition:leave=""
        x-transition:leave-start=""
        x-transition:leave-end=""
    >
        <div class="absolute"></div>
    </div>

    <div
        x-show="show"
        x-transition:enter=""
        x-transition:enter-start=""
        x-transition:enter-end=""
        x-transition:leave=""
        x-transition:leave-start=""
        x-transition:leave-end=""
    >
        {{ $slot }}
    </div>
</div>
