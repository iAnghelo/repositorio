<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositorio | Salazar Romero</title>
    <link rel="shortcut icon" href="{{ asset('img/logoCSR.ico') }}" />
    <!-- ESTILOS -->
    @vite('resources/css/app.css')
    <!-- ICONOS -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        .nav {
          position: relative;
          font-weight: 700;
          letter-spacing: 0.0625rem;
        }

        .nav::after {
          content: '';
          background-color: #2051da;
          height: 3px;
          width: 0%;
          position: absolute;
          left: 0;
          border-radius: 0.5rem;
        }
        .nav:hover::after {
          width: 100%;
        }
      </style>
</head>

<body>
    <header class='shadow-md bg-white font-sans tracking-wide relative z-50'>
    <section
        class='flex items-center lg:justify-center flex-wrap gap-5 relative  px-10 border-gray-200 border-b lg:min-h-[100px] max-lg:min-h-[60px]'>
            <a href="index.php">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-full h-24" />
            </a>
        <div class="space-x-6 md:absolute md:right-10 flex items-center max-md:ml-auto">
            <a href="https://www.facebook.com/idexcsr/?locale=es_LA">
        <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" width="20px" height="20px"
            viewBox="0 0 512 512">
            <path
            d="M449.643 0H62.357C27.973 0 0 27.973 0 62.357v387.285C0 484.027 27.973 512 62.357 512H260.86c8.349 0 15.118-6.769 15.118-15.118v-183.31c0-8.349-6.769-15.118-15.118-15.118h-54.341v-43.033h54.341c8.349 0 15.118-6.769 15.118-15.118v-61.192c0-33.116 26.942-60.058 60.059-60.058h52.433v43.033h-52.433c-9.387 0-17.025 7.639-17.025 17.026v61.192c0 8.349 6.769 15.118 15.118 15.118h54.341v43.033H334.13c-8.349 0-15.118 6.769-15.118 15.118v183.31c0 8.349 6.769 15.118 15.118 15.118h115.513C484.027 512 512 484.027 512 449.643V62.357C512 27.973 484.027 0 449.643 0zm32.121 449.643c0 17.712-14.409 32.122-32.122 32.122H349.246V328.69h54.341c8.349 0 15.118-6.769 15.118-15.118v-73.268c0-8.349-6.769-15.118-15.118-15.118h-54.341v-32.864h54.341c8.349 0 15.118-6.769 15.118-15.118v-73.268c0-8.349-6.769-15.118-15.118-15.118h-67.551c-49.788 0-90.294 40.506-90.294 90.294v46.074h-54.341c-8.349 0-15.118 6.769-15.118 15.118v73.268c0 8.349 6.769 15.118 15.118 15.118h54.341v153.074H62.357c-17.712 0-32.122-14.409-32.122-32.122V62.357c0-17.712 14.409-32.122 32.122-32.122h387.285c17.712 0 32.122 14.409 32.122 32.122v387.286z"
            data-original="#000000" />
        </svg>
        </a>
        <div class="inline-block border-gray-300 border-l-2 pl-6 cursor-pointer">
            <a href="{{ route('login.login') }}">
                <box-icon type='solid' name='user'></box-icon>
            </a>
        </div>
        </div>
    </section>

    <div class='flex flex-wrap py-3.5 px-10 overflow-x-auto bg-yellow-300'>
        <div id="collapseMenu"
        class='w-full max-lg:hidden  lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
        <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
            <path
                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                data-original="#000000"></path>
            <path
                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                data-original="#000000"></path>
            </svg>
        </button>
        <div class="flex align-center justify-center">
            <h2 class="text-6xl font-semibold">Repositorio Institucional</h2>
        </div>
        </div>
        <div class='flex ml-auto lg:hidden'>
        <button id="toggleOpen">
            <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
        </button>
        </div>
    </div>
    </header>
    <main class="max-w-7xl mx-auto mb-4">

        {{-- Contenido principal --}}
        {{ $slot }}
        {{-- Contenido principal --}}
    </main>
</body>
@vite(['resources/js/app.js'])
</html>
