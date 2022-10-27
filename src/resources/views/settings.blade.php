@extends('app')

@section('content')
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">

                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Set Ground Radius
                                </h3>
                                <div class="mt-2">
                                    <form method="POST" action="{{ route('settings.save') }}" class="mb-4 mr-2">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="radius" class="mb-4">Radius(m)</label>

                                            <input type="number" step="any"
                                                value="{{ $settings ? $settings->radius : '' }}" name="radius"
                                                placeholder="Radius(m)"
                                                class="border-2 border-slate-400 text-center w-full p-4 rounded-md mt-2">

                                            @error('radius')
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="flex justify-between">
                                            <button
                                                class="w-full px-4 py-2 font-bold text-white bg-violet-600 rounded-full hover:bg-violet-700 focus:outline-none focus:shadow-outline"
                                                type="submit">
                                                Set
                                            </button>
                                            <a href="{{ route('home') }}"
                                                class="w-full ml-3 text-center px-4 py-2 font-bold text-white bg-red-300 rounded-full hover:bg-red-600 focus:outline-none focus:shadow-outline">Close</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
