@extends('app')

@section('content')
    <div class="flex justify-center mt-6">
        <form method="POST" action="{{ route('store') }}" class="mb-4 mr-2">
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
                <input type="number" step="any" name="radius" placeholder="Radius(m)"
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
@endsection
