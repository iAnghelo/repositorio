@extends('components.header')

@section('title', 'Proyecto ' . $id->id)

@section('content')

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/informes"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    Gestionar Proyectos
                </a>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                        Proyecto {{ $id->id }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <section class="px-3 mt-5">
        <h2 class="mb-6 text-2xl text-center font-bold text-gray-900 dark:text-white">Administrar Proyecto :
            {{ $id->id }}
        </h2>

        <form action="/informes/{{ $id->id }}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full">
                <label for="titulo" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Título del
                    Proyecto</label>
                <input type="text" name="titulo" id="titulo" value="{{ $id->titulo }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ingrese el título del proyecto">
            </div>

            <div class="w-full">
                <label for="resumen" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Resumen</label>
                <textarea id="resumen" name="resumen" rows="4"
                    class="block p-3 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escriba el resumen...">{{ $id->resumen }}</textarea>
            </div>

            <div class="w-full">
                <label for="autores" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Autores</label>
                <textarea id="autores" name="autores" rows="2"
                    class="block p-3 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escriba el nombre de los autores...">{{ $id->autores }}</textarea>
            </div>

            <div class="grid gap-4 grid-cols-3 sm:gap-6">
                <div class="w-full">
                    <label for="fecha_emision" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Fecha
                        de
                        Creación</label>
                    <input type="date" name="fecha_emision" id="fecha_emision" value="{{ $id->fecha_emision }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="w-full">
                    <label for="year_creacion"
                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Año</label>
                    <input type="number" name="year_creacion" id="year_creacion" value="{{ $id->year_creacion }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingrese el año">
                </div>

                <div class="w-full">
                    <label for="tipo_informe" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tipo
                        Informe</label>
                    <select name="tipo_informe" id="tipo_informe"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected hidden>Seleccione el tipo de proyecto</option>
                        @foreach ($tipos as $key => $value)
                            <option value="{{ $key }}" {{ $key == $id->tipo_informe ? 'selected' : '' }}>
                                {{ $value }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="grid gap-4 grid-cols-3 sm:gap-6">
                <div class="w-full">
                    <label for="estado" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Estado
                        Proyecto</label>
                    <select name="estado" id="estado"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected hidden>Seleccione Estado</option>
                        @foreach ($estados as $key => $value)
                            <option value="{{ $key }}" {{ $key == $id->estado ? 'selected' : '' }}>
                                {{ $value }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full">
                    <label for="tipo_acceso" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tipo
                        de
                        Acceso</label>
                    <select name="tipo_acceso" id="tipo_acceso"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected hidden>Seleccione el tipo de acceso</option>
                        @foreach ($tipos_acceso as $key => $value)
                            <option value="{{ $key }}" {{ $key == $id->tipo_acceso ? 'selected' : '' }}>
                                {{ $value }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full">
                    <label class="block mb-2 text-base font-medium text-gray-900 dark:text-white" for="caratula">Seleccione
                        el Informe</label>
                    <input name="pdfInforme"
                        class="block w-full p-2 text-base text-gray-900 border rounded-lg cursor-pointer border-gray-300 bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="pdfInforme" id="pdfInforme" type="file">
                </div>
            </div>

            <div class="w-full">
                <label class="block mb-2 text-base font-medium text-gray-900 dark:text-white" for="caratula">Seleccione su
                    caratula</label>
                <input accept="image/*" name="caratula" onchange="previewImage(event, '#imgPreview')"
                    class="block w-full p-2 text-base text-gray-900 border rounded-lg cursor-pointer border-gray-300 bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="caratula" id="caratula" type="file">

                <div
                    class="viewCaratula
                   {{ $id->ruta_guardado ? '' : 'hidden' }} mt-4 flex justify-center items-center">
                    <img id="imgPreview" src="{{ $id->ruta_guardado ? asset('storage/' . $id->ruta_guardado) : '' }}"
                        class="max-w-xs max-h-100 object-cover rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base w-full sm:w-auto px-8 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
            </div>
        </form>
    </section>

    <script>
        function previewImage(event, querySelector) {
            const input = event.target;
            const $imgPreview = document.querySelector(querySelector);
            const $viewCaratula = document.querySelector('.viewCaratula');

            if (!input.files.length) return;

            const file = input.files[0];
            const objectURL = URL.createObjectURL(file);
            $viewCaratula.classList.remove('hidden'); // Mostrar el contenedor de la imagen si está oculto
            $imgPreview.src = objectURL; // Actualizar la imagen de previsualización
        }
    </script>
@endsection
