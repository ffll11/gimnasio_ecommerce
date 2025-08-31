{{-- Traemos management layout --}}
<x-management-layout>
    <x-slot name="action">
        <h1 class="text-2xl font-bold">Asistencia</h1>
    </x-slot>

    {{-- Traemos el componente livewire --}}
    @livewire('management.asistencia.asistencia-component', ['users' => $users], key($users->id))
    {{-- <p>Contenido de Asistencia</p> --}}
</x-management-layout>
