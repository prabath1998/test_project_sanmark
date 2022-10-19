<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Runners</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav
        class="relative w-full flex flex-wrap items-center justify-between py-3 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-md">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            <div class="container-fluid">
                <a class="text-xl text-green-600 font-bold" href="{{ route('home') }}">Runners</a>
            </div>
            <div class="container-fluid">
                <a class="text-md text-black" href="{{ route('view') }}">Settings</a>
            </div>
            {{-- <div class="container-fluid">
                <form action="">
                    <button type="submit"
                        class="bg-red-400 hover:bg-red-600 text-white px-4 py-2 rounded font-medium justify-end">Generate
                        Report</button>

                </form>
            </div> --}}
        </div>
    </nav>

    @yield('content')
</body>

</html>
