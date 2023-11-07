<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <a href="{{ route('appearance.create')}}">Add Appearance</a>
                <a href="{{ route('appearance.index')}}">My Timeroll Appearances</a>
                <p>This is an application to manage the time you spend in a specifik place or activity</p>
                
            </div>
        </div>
    </div>
</x-app-layout>
