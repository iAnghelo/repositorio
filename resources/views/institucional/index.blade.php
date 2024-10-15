<x-app-main>
    <div class="bg-black">
        <x-breadcrumb name="institucional.index"></x-breadcrumb>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 w-full gap-2 sm:gap-4">

        {{-- Columna izquierda --}}
        <div class="container hidden md:block">
           <x-filter></x-filter>
        </div>
        {{-- Columna derecha --}}
        <div class="md:col-span-3 flex flex-col w-full px-4">
            <!-- Sección de búsqueda -->
            <h3 class="text-3xl font-semibold py-2">Buscar</h3>
            <x-search
                :parametro="'institucional'"
            />
            <x-count :contador="$contador" />
            <!-- Sección de cards, siempre visible y adaptable -->
            <div class="py-2 gap-4 w-full ">
                @foreach ($informes as $informe)
                    <x-card
                        :parametro="'institucional'"
                        :codigo="$informe->id"
                        :image="$informe->ruta"
                        :title="$informe->titulo"
                        :resumen="$informe->resumen"
                        :autores="$informe->autores"
                        :acceso="$informe->tipo_acceso"
                    />
                @endforeach
            </div>

            <x-pagination :paginator="$informes" />

        </div>

    </div>
</x-app-main>
