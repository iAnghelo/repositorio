@extends('components.header')

@section('title', 'Gestionar Proyectos')

@section('content')

    @include('components.alerts.alert')
    @include('components.modal.delete')


    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"> Gestionar Proyectos
                    </span>
                </div>
            </li>
        </ol>
    </nav>
    <h2 class="mb-6 text-2xl text-center font-bold text-gray-900 dark:text-white">GESTIONAR PROYECTOS</h2>

    <div class="overflow-x-auto mb-6">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-5 border-b">ID</th>
                    <th class="py-3 px-5 border-b">TÍTULO</th>
                    <th class="py-3 px-5 border-b">AUTORES</th>
                    <th class="py-3 px-5 border-b">FECHA EMISIÓN</th>
                    <th class="py-3 px-5 border-b">AÑO</th>
                    <th class="py-3 px-5 border-b">ACCIONES</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 border">
                @if ($informes->isEmpty())
                    <tr>
                        <td colspan="6"
                            class="text-center text-gray-700 bg-gray-100 hover:bg-gray-200 p-4 text-lg transition-colors duration-300">
                            <span class="font-bold">Sin datos.</span>
                        </td>
                    </tr>
                @else
                    @foreach ($informes as $info)
                        <tr class="hover:bg-gray-100 transition duration-200">
                            <td class="py-3 px-5 border-b">{{ $info->id }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->titulo }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->autores }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->fecha_emision }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->year_creacion }}</td>
                            <td class="py-3 px-5 border-b flex gap-1">
                                <a href="/informes/{{ $info->id }}"
                                    class="text-white bg-blue-700 rounded-lg p-3 transition duration-150 ease-in-out hover:bg-blue-800 hover:shadow-lg transform hover:scale-105">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" data-tw-toggle="modal" data-tw-target="#delete-modal{{ $info->id }}"
                                    type="button"
                                    class="text-white bg-red-700 rounded-lg p-3 transition duration-150 ease-in-out hover:bg-red-800 hover:shadow-lg transform hover:scale-105">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>

        </table>
    </div>
    {{ $informes->links() }}

@endsection
