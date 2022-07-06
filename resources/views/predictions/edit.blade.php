@extends('layouts.app')
@section('content')
        <div class="text-center">
        <h1 class="text-5xl uppercase bold">Update a prediction!</h1>
        </div>

    <div class="flex justify-center pt-20">
        <form action="/predictions/{{ $prediction->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="w-3/4 m-auto">
            <div class="block align-items-center float-left">
                @php
                $listOfDrivers=['Max Verstappen','Sergio Pérez','Charles Leclerc','George Russell','Carlos Sainz Jr.','Lewis Hamilton','Lando Norris','Valtteri Bottas','Esteban Ocon','Fernando Alonso','Pierre Gasly','Kevin Magnussen','Daniel Ricciardo','Sebastian Vettel','Yūki Tsunoda','Zhou Guanyu','Alexander Albon','Lance Stroll','Mick Schumacher','Nicholas Latifi'];
                $names=['first','second','third','fourth','fifth','sixth','seventh','eighth','nineth','tenth'];
                @endphp
                @foreach ($names as $key=>$name)
                <span class="float-left">
                    <h2 class="text-purple-600 text-3xl text-center">
                        @php
                            echo "P",$key+1;
                            echo "<br>";
                        @endphp
                    </h2>
                    <h6 class="text-purple-500 text-center">
                        <i>{{ strtoupper($name) }}</i>
                    </h6>
                        
                    
                    @foreach ($listOfDrivers as $driver)
                        
                        <label class="form-check-label inline-block text-gray-800" for="{{ $name }}{{ $driver }}">
                            <input 
                            type="radio" 
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" 
                            name="{{ $name }}"
                            id="{{ $name }}{{ $driver }}" 
                            value="{{ $driver }}"
                            @if ($prediction->$name == $driver)
                                checked
                            @endif>
                            <img src="{{ asset('storage/'.$driver.'.png') }}" width="270" id='{{ $name }}{{ $driver }}'>
                        </label>
                        <br>
                    @endforeach
                    </span>
                @endforeach
                </div>
                <button type="submit" class="m-auto bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">Submit</button>
        </div>
        </form>
    </div>
@endsection