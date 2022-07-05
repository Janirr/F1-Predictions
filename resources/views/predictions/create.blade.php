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
            <div class="block align-items-center float-left">
                @php
                $listOfDrivers=['Max Verstappen','Sergio Pérez','Charles Leclerc','George Russell','Carlos Sainz Jr.','Lewis Hamilton','Lando Norris','Valtteri Bottas','Esteban Ocon','Fernando Alonso','Pierre Gasly','Kevin Magnussen','Daniel Ricciardo','Sebastian Vettel','Yūki Tsunoda','Zhou Guanyu','Alexander Albon','Lance Stroll','Mick Schumacher','Nico Hülkenberg','Nicholas Latifi'];
                $names=['first','second','third','fourth','fifth','sixth','seventh','eighth','nineth','tenth'];
                @endphp
                @foreach ($names as $name)
                <span class="float-left">
                    <h2 class="text-green-600 text-2xl font-bold text-center">
                        {{ strtoupper($name) }}
                    </h2>
                    @foreach ($listOfDrivers as $driver)
                        <input 
                        type="radio" 
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" 
                        name="{{ $name }}"
                        id="{{ $name }}{{ $driver }}" 
                        value="{{ $driver }}">
                        <label class="form-check-label inline-block text-gray-800" for="{{ $name }}{{ $driver }}">
                            {{ $driver }}
                        </label>
                        <br>
                    @endforeach
                    </span>
                @endforeach
                
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
            </div>
        </form>
    </div>
@endsection