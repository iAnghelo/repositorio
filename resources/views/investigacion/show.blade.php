<x-app-main>
    <x-breadcrumb name="institucional.index"></x-breadcrumb>
    <div class="grid grid-cols-1 md:grid-cols-4 w-full gap-2 sm:gap-4">
        <div class="container hidden md:block">
            <x-filter></x-filter>
        </div>
        <div class="md:col-span-3 flex flex-col w-full px-4">
            <h3 class="text-3xl font-semibold py-2">Buscar</h3>
            <x-search></x-search>
            <x-item class="col-span-2"
                :codigo="$informe->codigo"
                :image="$informe->ruta"
                :title="$informe->nombre"
                :resumen="$informe->resumen"
                :autores="$informe->autores"
                :acceso="$informe->tipo_acceso"
                :fecha="$informe->fecha_creacion"
                :anio="$informe->ano_publicacion"
                :tipo="$informe->tipo_informe"
            />
        </div>
    </div>
</x-app-main>
