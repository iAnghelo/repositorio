<a href="{{ route($parametro . '.show', [$parametro => $codigo]) }}"  class="flex items-center w-full mb-2 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="border border-black object-cover rounded-lg w-48 h-48 md:h-48 md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset( $image)}}" alt="">
    <div class="flex flex-col justify-between px-4 leading-normal">
        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$title}}</h5>
        <p class="text-sm">{{ $autores }}</p>
        <p class="{{ $getColor() }} font-semibold ">
            <box-icon name="{{ $getIcon() }}" type="solid" color="{{ $getColor() }}" style="width: 20px; height: 20px;"></box-icon>
            {{ $acceso }}
        </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $resumen }}</p>

    </div>
</a>
