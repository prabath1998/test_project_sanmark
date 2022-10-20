@extends('app')

@section('content')
    <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
        @if (session()->has('message'))
            <div class="p-3 text-green-700 bg-green-300 rounded text-center">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>

    <div class="flex justify-center mt-6">
        <form method="POST" action="{{ route('store') }}" class="mb-4 mr-2">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Runner's name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter runner's name"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="radius" class="sr-only">Radius(m)</label>
                <input type="number" value="{{ old('radius') }}" step="any" name="radius" placeholder="Radius(m)"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('radius')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="begin" class="sr-only">Start Time</label>
                <input type="time" value="{{ old('begin') }}" step="1" name="begin" placeholder="Start Time"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('begin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="end" class="sr-only">End Time</label>
                <input type="time" value="{{ old('end') }}" step="1" name="end" placeholder="End Time"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('end')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="laps" class="sr-only">Number of Laps</label>
                <input type="number" value="{{ old('laps') }}" name="laps" placeholder="Number of Laps"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('laps')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="bg-gray-900 hover:bg-violet-800 text-white px-4 py-2 rounded font-medium justify-end">Submit</button>
            </div>
        </form>

    </div>
@endsection
