<x-app-layout>
    <x-slot name="header">
        {{ __('Cadeiras') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <livewire:admins.subjects.edit :subject="$subject" />
    </div>
</x-app-layout>
