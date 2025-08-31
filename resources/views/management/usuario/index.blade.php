<x-management-layout>

    <x-slot name="action">
        <h1 class="text-2xl font-bold">Usuarios</h1>
    </x-slot>
    {{-- Traemos el componente livewire --}}

    @livewire('management.usuarios.usuarios-component', ['user' => $user] )

</x-management-layout>
