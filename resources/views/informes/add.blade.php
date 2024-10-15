@extends('components.header')

@section('title', 'Añadir Proyecto')

@section('content')

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <svg class="w-3 mr-1 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                <a href="/home"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    Inicio
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
                        Subir Proyecto</span>
                </div>
            </li>
        </ol>
    </nav>

    <section class="px-3 mt-5">
        <h2 class="mb-6 text-2xl text-center font-bold text-gray-900 dark:text-white">Añadir Proyecto</h2>

        <form action="/informes" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="w-full">
                <label for="titulo" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Título del
                    Proyecto</label>
                <input type="text" name="titulo" id="titulo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ingrese el título del proyecto" required>
            </div>

            <div class="w-full">
                <label for="resumen" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Resumen</label>
                <textarea name="resumen" id="resumen" rows="4"
                    class="block p-3 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escriba el resumen..." required></textarea>
            </div>

            <div class="w-full">
                <label for="autores" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Autores</label>
                <textarea name="autores" id="autores" rows="2"
                    class="block p-3 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escriba el nombre de los autores..." required></textarea>
            </div>

            <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-3">
                <div class="w-full">
                    <label for="fechaE" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Fecha de
                        Creación</label>
                    <input type="date" name="fecha_emision" id="fechaE"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </div>

                <div class="w-full">
                    <label for="year" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Año</label>
                    <input type="number" name="year_creacion" id="year"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingrese el año" required>
                </div>

                <div class="w-full">
                    <label for="tipo"
                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tipo</label>
                    <select name="tipo_informe" id="tipo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option value="" selected hidden>Seleccione el tipo de proyecto</option>
                        <option value="TV/Monitores">TV/Monitores</option>
                        <option value="PC">PC</option>
                        <option value="Gaming/Consola">Gaming/Consola</option>
                        <option value="Teléfonos">Teléfonos</option>
                    </select>
                </div>
            </div>

            <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-3">
                <div class="w-full">
                    <label for="estado" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Estado
                        Proyecto</label>
                    <select name="estado" id="estado"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option value="" selected hidden>Seleccione Estado</option>
                        <option value="Publicar">Publicar</option>
                        <option value="No Publicar">No Publicar</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="tipo_acceso" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tipo de
                        Acceso</label>
                    <select name="tipo_acceso" id="tipo_acceso"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option value="" selected hidden>Seleccione el tipo de acceso</option>
                        <option value="Publico">Publico</option>
                        <option value="Privado">Privado</option>
                    </select>
                </div>
                <div class="w-full">
                    <label class="block mb-2 text-base font-medium text-gray-900 dark:text-white"
                        for="caratula">Seleccione
                        el Informe</label>
                    <input name="pdfInforme"
                        class="block w-full p-2 text-base text-gray-900 cursor-pointer border border-gray-300 bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="pdfInforme" id="pdfInforme" type="file" required>
                </div>
            </div>

            <div class="w-full">
                <label class="block mb-2 text-base font-medium text-gray-900 dark:text-white" for="caratula">Seleccione
                    la caratula</label>
                <input name="caratula" accept="image/*" onchange="previewImage(event, '#imgPreview')"
                    class="block p-2 w-full text-base text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="caratula" id="caratula" type="file" required>
                @error('caratula')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                <div class="viewCaratula mt-4 flex justify-center items-center">
                    <img id="imgPreview"
                        class="max-w-xs max-h-100 object-cover rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Registrar
                </button>
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
            $viewCaratula.classList.remove('hidden');
            $imgPreview.src = objectURL;
        }
    </script>
@endsection
