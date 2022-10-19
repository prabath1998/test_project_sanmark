<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav
        class="relative w-full flex flex-wrap items-center justify-between py-3 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            <div class="container-fluid">
                <a class="text-xl text-green-600 font-bold" href="#">Runners</a>
            </div>
        </div>
    </nav>


    <div class="flex justify-center mt-6">
        <form method="POST" action="{{ route('store') }}" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Runner's name</label>
                <input type="text" name="name" placeholder="Enter runner's name"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="radius" class="sr-only">Radius(m)</label>
                <input type="number" name="radius" placeholder="Radius(m)"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('radius')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="begin" class="sr-only">Start Time</label>
                <input type="time" name="begin" placeholder="Start Time"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('begin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="end" class="sr-only">End Time</label>
                <input type="time" name="end" placeholder="End Time"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('end')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="laps" class="sr-only">Number of Laps</label>
                <input type="number" name="laps" placeholder="Number of Laps"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('laps')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="bg-green-400 hover:bg-green-600 text-white px-4 py-2 rounded font-medium justify-end">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
