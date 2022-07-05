@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
        <h1 class="text-5xl uppercase bold">Update a prediction!</h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/predictions/{{ $prediction->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="first" 
                    value="{{ $prediction->first }}"
                    >
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="second" 
                    value="{{ $prediction->second }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="third" 
                    value="{{ $prediction->third }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="fourth" 
                    value="{{ $prediction->fourth }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="fifth" 
                    value="{{ $prediction->fifth }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="sixth" 
                    value="{{ $prediction->sixth }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="seventh" 
                    value="{{ $prediction->seventh }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="eighth" 
                    value="{{ $prediction->eighth }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="nineth" 
                    value="{{ $prediction->nineth }}">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="tenth" 
                    value="{{ $prediction->tenth }}">
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
            </div>
        </form>
    </div>
@endsection