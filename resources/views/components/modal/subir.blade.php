@foreach ($publicaciones as $info)
    <div class="relative z-50 hidden modal" id="subir-modal{{ $info->id }}" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 z-50 overflow-hidden">
            <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay"></div>
            <div class="p-4 mx-auto text-center animate-translate sm:max-w-lg">
                <div
                    class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-700 dark:border-zinc-600">
                    <div class="p-5 text-center bg-white dark:bg-zinc-700">
                        <div class="mx-auto bg-green-100 rounded-full h-14 w-14">
                            <i class="mdi mdi-check-all text-2xl text-green-600 leading-[2.4]"></i>
                        </div>
                        <h2 class="mt-5 text-xl text-gray-700 dark:text-gray-100">Confimar subida :v</h2>
                        <p class="mt-2 text-lg text-gray-500 dark:text-zinc-100/60">Estas seguro que deseas subir este
                            proyecto
                            : <br>
                            <b>{{ $info->id }} : {{ $info->titulo }}</b>?
                        </p>
                        <div class="px-4 py-3 mt-4 text-center">
                            <a href="" type="button"
                                class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-blue-600   rounded-md shadow-sm btn hover:bg-blue-700 focus:outline-none focus:ring-2 sm:ml-3 sm:w-auto sm:text-sm">Confirmar</a>
                            <button type="button"
                                class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-white bg-red-600 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20"
                                data-tw-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
