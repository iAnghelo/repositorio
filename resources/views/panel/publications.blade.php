@extends('components.header')

@section('title', 'Publicaciones')

@section('content')

    @include('components/modal/subir')

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/home"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 mr-1 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Inicio
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="/informes"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Proyectos</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Publicaciones
                    </span>
                </div>
            </li>
        </ol>
    </nav>


    <h2 class="mb-6 text-2xl text-center font-bold text-gray-900 dark:text-white">GESTIONAR PUBLICACIONES</h2>

    <div class="overflow-x-auto mb-6">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-5 border-b">TÍTULO</th>
                    <th class="py-3 px-5 border-b">AUTORES</th>
                    <th class="py-3 px-5 border-b">FECHA EMISIÓN</th>
                    <th class="py-3 px-5 border-b">AÑO</th>
                    <th class="py-3 px-5 border-b">ACCESO</th>
                    <th class="py-3 px-5 border-b">ACCIONES</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 border">
                @if ($publicaciones->isEmpty())
                    <tr>
                        <td colspan="6"
                            class="text-center text-gray-700 bg-gray-100 hover:bg-gray-200 p-4 text-lg transition-colors duration-300">
                            <span class="font-bold">Sin datos.</span>
                        </td>
                    </tr>
                @else
                    @foreach ($publicaciones as $info)
                        <tr class="hover:bg-gray-100 transition duration-200">
                            <td class="py-3 px-5 border-b">{{ $info->titulo }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->autores }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->fecha_emision }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->year_creacion }}</td>
                            <td class="py-3 px-5 border-b">{{ $info->tipo_acceso }}</td>
                            <td class="py-3 px-5 border-b flex gap-1">
                                <a href="#" data-tw-toggle="modal" data-tw-target="#subir-modal{{ $info->id }}"
                                    type="button"
                                    class="text-white bg-blue-700 rounded-lg p-3 transition duration-150 ease-in-out hover:bg-blue-800 hover:shadow-lg transform hover:scale-105">
                                    <i class="fa-solid fa-upload"></i> Subir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    {{ $publicaciones->links() }}
@endsection
