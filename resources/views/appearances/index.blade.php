<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Appearances') }}
        </h2>
    </x-slot>
    <x-slot name="content">
        <livewire:ShowAppearances />
    </x-slot>
            

</x-app-layout>
