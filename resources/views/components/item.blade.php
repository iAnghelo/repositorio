<div class="bg-red-600 p-2 grid grid-cols-3 w-full gap-2 sm:gap-4">
    <div class="col-span-4 bg-slate-600">
        <h2 class="text-3xl font-semibold">{{$title}}</h1>
        <hr>
    </div>
    <div class="col-span-1">
        <img src="{{ asset($image) }}" alt="">
    </div>
    <div class="col-span-2">
        <h1 class="text-3xl font-semibold">{{$resumen}}</h1>
    </div>
</div>
