@extends('app')

@section('content')
    <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
        @if (session()->has('message'))
            <div class="px-8 py-6 bg-green-400 text-white flex justify-between rounded">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                    </svg>
                    <p>{{ session()->get('message') }}</p>
                </div>
            </div>
        @endif

        @if (session()->has('warning'))
            <div class="px-8 py-6 bg-yellow-400 text-white flex justify-between rounded">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                    </svg>
                    <p>{{ session()->get('warning') }}</p>
                </div>
            </div>
        @endif
    </div>

    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://media.istockphoto.com/photos/they-keep-each-other-going-picture-id628504820?k=20&m=628504820&s=612x612&w=0&h=ghwkhN39Ofsq19JifdlQcGeC7Ocvr04XUWNxpNxEVOc=')">
                </div>
                <!-- Col -->
                <div class="w-full lg:w-8/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Track Your Speed Here!</h3>
                    <form method="POST" action="{{ route('store') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Name
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="name" name="name" value="{{ old('name') }}" type="text"
                                    placeholder="Enter Name" />
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="radius">
                                    Radius(m)
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="radius" name="radius" value="{{ old('radius') }}" step="any" type="number"
                                    placeholder="Enter Radius" />
                                @error('radius')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="laps">
                                Laps
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="laps" name="laps" type="number" value="{{ old('laps') }}"
                                placeholder="Number of laps" />
                            @error('laps')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 md:flex md:justify-between flex justify-center">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="begin">
                                    Start
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="begin" name="begin" step="1" value="{{ old('begin') }}" type="time"
                                    placeholder="Start Time" />
                                @error('begin')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="end">
                                    End
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="end" type="time" name="end" step="1"
                                    value="{{ old('end') }}" />
                                @error('end')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-6 text-center mt-6">
                            <button
                                class="w-full h-16  px-4 py-2 font-bold text-white bg-violet-500 rounded-full hover:bg-violet-700 focus:outline-none focus:shadow-outline"
                                type="submit">
                                Save
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
