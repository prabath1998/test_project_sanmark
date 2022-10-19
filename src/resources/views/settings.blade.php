@extends('app')

@section('content')
    <div class="flex justify-center mt-6">
        <form method="POST" action="{{ route('settings.save') }}" class="mb-4 mr-2">
            @csrf
            <div class="mb-4">
                <label for="radius" class="sr-only">Radius(m)</label>
                <input type="number" step="any" value="{{ $settings->radius }}" name="radius" placeholder="Radius(m)"
                    class="border-2 border-slate-400 w-full p-4 rounded-md">
                @error('radius')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="bg-rose-400 hover:bg-rose-600 text-white px-4 py-2 rounded font-medium justify-end">save</button>
            </div>
        </form>

    </div>
@endsection