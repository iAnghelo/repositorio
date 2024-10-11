<div class="pt-2 pl-2">
    @if ($contador > 0)
        <p class="text-black text-sm">
            Mostrando resultados 1-{{ min($contador, 10) }} de {{ $contador }}
        </p>
    @else
        <p class="text-black text-sm">No se encontraron resultados.</p>
    @endif

</div>
