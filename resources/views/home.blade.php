<x-app-main>
    <div class="bg-black">
        <x-breadcrumb name="home"></x-breadcrumb>
    </div>
    <div class="w-full text-center mt-6">

        <h1 class="text-4xl font-semibold">Recursos</h1>
    </div>

    <!-- TABS -->
    <div class="flex justify-center mb-10 flex-wrap ">
        <div class=" text-center flex flex-wrap ">
            <a href="view/repoz_carre.php" class="hover:shadow-lg hover:shadow-blue-500/50 border nav  w-full sm:w-auto ">
                <h1 class="p-4 m-2">Programa de Estudio</h1>
            </a>
            <a href="" class="hover:shadow-lg hover:shadow-blue-500/50 border nav w-full sm:w-auto">
                <h1 class="p-4 m-2">Investigación</h1>
            </a>
            <a href="" class="hover:shadow-lg hover:shadow-ablue-500/50 border nav w-full sm:w-auto">
                <h1 class="p-4 m-2">Proyectos</h1>
            </a>
            <a href="" class="hover:shadow-lg hover:shadow-blue-500/50 border nav w-full sm:w-auto">
                <h1 class="p-4 m-2">Informe de Prácticas</h1>
            </a>
        </div>
    </div>
    <!-- CONTENIDO -->
    <div class="w-full">
        <div class="w-full text-center mb-6">
            <h1 class="text-3xl font-semibold pb-2">Repositorios Salazar Romero</h1>
            <p>Los repositorios de ISTP Salazar Romero son una colección de recursos educativos, tesis, trabajos de investigación, revistas, materiales digitalizados
                y datos de investigaciones producidos por miembros de la comunidad Salazarina.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 p-4 bg-gray-100">
            <a href="{{ route('institucional.index') }}" class="hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <div class="bg-white px-2 py-12 text-left">
                    <h3 class="text-2xl font-semibold text-sky-600">Repositorio Institucional</h3>
                    <p class="text-black">Dirigido a todos los programas de estudios</p>
                </div>
            </a>
            <a href="{{ route('investigacion.index') }}" class="hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <div class="bg-white px-2 py-12 text-left">
                    <h3 class="text-2xl font-semibold text-sky-600">Repositorio de Investigación</h3>
                    <p class="text-black">Dirigido a todos los programas de estudios</p>
                </div>
            </a>
            <a href="" class="hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <div class="bg-white px-2 py-12 text-left">
                    <h3 class="text-2xl font-semibold text-sky-600">Repositorio de Proyectos</h3>
                    <p class="text-black">Dirigido a todos los programas de estudios</p>
                </div>
            </a>
            <a href="" class="hover:shadow-2xl transition-shadow duration-300 ease-in-out">
                <div class="bg-white px-2 py-12 text-left">
                    <h3 class="text-2xl font-semibold text-sky-600">Repositorio de Informe de Prácticas</h3>
                    <p class="text-black">Dirigido a todos los programas de estudios</p>
                </div>
            </a>
        </div>
    </div>
</x-app-main>
