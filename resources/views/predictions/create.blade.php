@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
        <h1 class="text-5xl uppercase bold">Make a prediction!</h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/predictions" method="POST">
            @csrf
            <div class="block">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="first" 
                    placeholder="P1">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="second" 
                    placeholder="P2">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="third" 
                    placeholder="P3">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="fourth" 
                    placeholder="P4">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="fifth" 
                    placeholder="P5">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="sixth" 
                    placeholder="P6">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="seventh" 
                    placeholder="P7">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="eighth" 
                    placeholder="P8">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="nineth" 
                    placeholder="P9">
                    <input 
                    type="text" 
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
                    name="tenth" 
                    placeholder="P10">
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
            </div>
        </form>
    </div>
@endsection