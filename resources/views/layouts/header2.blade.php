<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Repositorio Institucional" name="description" />
    <meta content="" name="author" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind2.css') }}">

</head>

<body data-mode="light" data-sidebar-size="lg" class="group">
    <!-- ========== Left Sidebar Start ========== -->
    <div
        class="fixed bottom-0 z-10 h-screen ltr:border-r rtl:border-l vertical-menu rtl:right-0 ltr:left-0 top-[70px] bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700">
        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul id="side-menu">
                    <li class="px-5 py-3 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden block"
                        data-key="t-menu">
                        Menu
                    </li>

                    <li>
                        <a href="index.html"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home" fill="#545a6d33"></i>
                            <span data-key="t-dashboard">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="grid" class="align-middle" fill="#545a6d33"></i>
                            <span data-key="t-apps"> Apps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="app-calendar.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                            </li>
                            <li>
                                <a href="app-chat.html"
                                    class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Email</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-email-inbox.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read
                                            Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Invoices</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-invoices-list.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-invoices-detail.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Contacts</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-contacts-grid.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-list.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-profile.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="flex items-center justify-between py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear  pl-[52.8px] pr-6 hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Blog</span>
                                    <span
                                        class="px-2 py-0.5 font-medium text-red-400 rounded-full bg-red-50 text-10 badge text-end group-data-[sidebar-size=sm]:hidden">New</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-blog-grid.html"
                                            class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-list.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-detail.html"
                                            class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="users" fill="#545a6d33"></i>
                            <span data-key="t-auth">Authentication</span>
                        </a>
                    </li>
                    <ul>
                        <li>
                            <a href="app-calendar.html"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                        </li>
                        <li>
                            <a href="app-chat.html"
                                class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Email</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-email-inbox.html"
                                        class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                </li>
                                <li>
                                    <a href="apps-email-read.html"
                                        class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read
                                        Email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Invoices</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-invoices-list.html"
                                        class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                        List</a>
                                </li>
                                <li>
                                    <a href="apps-invoices-detail.html"
                                        class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                        Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="block py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu pl-[52.8px] hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Contacts</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-contacts-grid.html"
                                        class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                        Grid</a>
                                </li>
                                <li>
                                    <a href="apps-contacts-list.html"
                                        class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                        List</a>
                                </li>
                                <li>
                                    <a href="apps-contacts-profile.html"
                                        class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="flex items-center justify-between py-[6.4px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear  pl-[52.8px] pr-6 hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <span data-key="t-apps">Blog</span>
                                <span
                                    class="px-2 py-0.5 font-medium text-red-400 rounded-full bg-red-50 text-10 badge text-end group-data-[sidebar-size=sm]:hidden">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-blog-grid.html"
                                        class="pl-[52.8px] pr-6 py-[6.4px] block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                        Grid</a>
                                </li>
                                <li>
                                    <a href="apps-blog-list.html"
                                        class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                        List</a>
                                </li>
                                <li>
                                    <a href="apps-blog-detail.html"
                                        class="pl-14 pr-4  py-2 block text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
    <nav
        class="fixed top-0 left-0 right-0 z-10 flex items-center bg-white dark:bg-zinc-800 print:hidden dark:border-zinc-700 ltr:pr-6 rtl:pl-6">
        <div class="flex justify-between w-full">
            <div class="flex items-center topbar-brand">
                <div
                    class="hidden lg:flex navbar-brand items-center justify-between shrink px-6 h-[70px] ltr:border-r rtl:border-l bg-[#fbfaff] border-gray-50 dark:border-zinc-700 dark:bg-zinc-800 shadow-none">
                    <a href="#"
                        class="flex items-center text-lg flex-shrink-0 font-bold dark:text-white leading-[69px]">
                        <img
                            src="{{ asset('images/logo-sm.svg" alt=""
                                                                             class="inline-block w-6 h-6 align-middle ltr:xl:mr-2 rtl:xl:ml-2') }}" />
                        <span
                            class="hidden font-bold text-gray-700 align-middle xl:block dark:text-gray-100 leading-[69px]">Minia</span>
                    </a>
                </div>
                <button type="button"
                    class="group-data-[sidebar-size=sm]:border-b border-b border-[#e9e9ef] dark:border-zinc-600 dark:lg:border-transparent lg:border-transparent group-data-[sidebar-size=sm]:border-[#e9e9ef] group-data-[sidebar-size=sm]:dark:border-zinc-600 text-gray-800 dark:text-white h-[70px] px-4 ltr:-ml-[52px] rtl:-mr-14 py-1 vertical-menu-btn text-16"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
            <div
                class="flex justify-between w-full items-center border-b border-[#e9e9ef] dark:border-zinc-600 ltr:pl-6 rtl:pr-6">
                <div>
                    <form class="hidden app-search xl:block">
                        <div class="relative inline-block">

                        </div>
                    </form>
                </div>
                <div class="flex">
                    <div>
                        <div class="relative block dropdown sm:hidden">
                            <button type="button"
                                class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle"
                                data-dropdown-toggle="navNotifications">
                                <i data-feather="search" class="w-5 h-5"></i>
                            </button>

                            <div class="absolute top-0 z-50 hidden px-4 mx-4 list-none bg-white border rounded shadow dropdown-menu -left-36 w-72 border-gray-50 dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300"
                                id="navNotifications">
                                <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                    <div class="m-0 form-group">
                                        <div class="flex w-full">
                                            <input type="text"
                                                class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit"
                                                placeholder="Search ..." aria-label="Search Result" />
                                            <button
                                                class="text-white border-l-0 border-transparent rounded-l-none btn btn-primary bg-violet-500"
                                                type="submit">
                                                <i class="mdi mdi-magnify"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button"
                            class="light-dark-mode text-xl px-3 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block">
                            <i data-feather="moon" class="block w-5 h-5 dark:hidden"></i>
                            <i data-feather="sun" class="hidden w-5 h-5 dark:block"></i>
                        </button>
                    </div>
                    <div>
                        <div class="relative dropdown">
                            <button type="button"
                                class="flex items-center px-3 py-2 h-[70px] border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                                id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true">
                                <img class="border-[3px] border-gray-700 dark:border-zinc-400 rounded-full w-9 h-9 ltr:xl:mr-2 rtl:xl:ml-2"
                                    src="assets/images/avatar-1.jpg" alt="Header Avatar" />
                                <span class="hidden font-medium xl:block">User</span>
                                <i class="hidden align-bottom mdi mdi-chevron-down xl:block"></i>
                            </button>
                            <div class="absolute top-0 z-50 hidden w-40 list-none bg-white dropdown-menu dropdown-animation rounded shadow dark:bg-zinc-800"
                                id="profile/log">
                                <div class="border border-gray-50 dark:border-zinc-600"
                                    aria-labelledby="navNotifications">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="block px-3 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                            href="apps-contacts-profile.html">
                                            <i class="mr-1 align-middle mdi mdi-face-man text-16"></i>
                                            Profile
                                        </a>
                                    </div>
                                    <hr class="border-gray-50 dark:border-gray-700" />
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="block p-3 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50"
                                            href="logout.html">
                                            <i class="mr-1 align-middle mdi mdi-logout text-16"></i>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                xD
                <h1>Hola</h1>
            </div>
        </div>
    </div>
    <script src="{{ asset('libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('js/pages/nav%26tabs.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
