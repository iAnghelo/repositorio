@extends('components.header')

@section('title', 'Publicaciones')

@section('content')

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
                                <a href="#"
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
