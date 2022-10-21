@extends('app')

@section('content')
    <div class="container mx-auto">
        <h3 class="pt-4 text-2xl text-center mb-4">Set Ground Radius!</h3>
        <div class="flex flex-col 
    items-center justify-center">

            <form method="POST" action="{{ route('settings.save') }}" class="mb-4 mr-2">
                @csrf
                <div class="mb-4">
                    <label for="radius" class="mb-4">Radius(m)</label>

                    <input type="number" step="any" value="{{ $settings ? $settings->radius : '' }}" name="radius"
                        placeholder="Radius(m)" class="border-2 border-slate-400 text-center w-full p-4 rounded-md mt-2">

                    @error('radius')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button
                        class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                        type="submit">
                        Set
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
