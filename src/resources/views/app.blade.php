<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runners</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    {{-- <nav
        class="relative w-full flex flex-wrap items-center justify-between py-3 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-md">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            <div class="container-fluid">
                <a class="text-xl text-violet-700 font-bold" href="{{ route('home') }}">Runners</a>
            </div>
            <div class="container-fluid">
                <a class="text-md text-black" href="{{ route('view') }}">Settings</a>
            </div>
            <div class="container-fluid">
                <form action="">
                    <button type="submit"
                        class="bg-red-400 hover:bg-red-600 text-white px-4 py-2 rounded font-medium justify-end">Generate
                        Report</button>

                </form>
            </div>
        </div>
    </nav> --}}


    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="{{ route('home') }}" class="flex items-center">

                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Speed Tracker</span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href=""
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}"
                            class="bg-red-400 hover:bg-red-600 text-white px-4 py-2 rounded font-medium justify-end">Generate
                            Report</a>
                    </li>
                    <li>
                        <a href="{{ route('view') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')
</body>

</html>
