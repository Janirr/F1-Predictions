@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Predictions<br>
                <a href="predictions/create" class="border-b-2 pb-2 border-dotted italic text-gray-500 text-center">
                    Add a new prediction &rarr;
                </a>
            </h1>
        </div>
    </div>
    <div class="pt-10">
        
    </div>
        {{-- <span class="inline-grid grid-cols-3 gap-4">
            <span>01</span>
            <span>02</span>
            <span>03</span>
            <span>04</span>
            <span>05</span>
            <span>06</span>
          </span>
          <span class="inline-grid grid-cols-3 gap-4">
            <span>01</span>
            <span>02</span>
            <span>03</span>
            <span>04</span>
            <span>05</span>
            <span>06</span>
          </span> --}}
        
        <div class="flex flex-wrap">
        @foreach ($predictions as $prediction)
        
        <div class="w-1/6 p-5">
            <fieldset style="border: 0.5px solid black">
                <legend>Predykcja:</legend>
            <h2>1: {{ $prediction->first }}</h2>
            <h2>2: {{ $prediction->second }}</h2>
            <h2>3: {{ $prediction->third }}</h2>
            <h2>4: {{ $prediction->fourth }}</h2>
            <h2>5: {{ $prediction->fifth }}</h2>
            <h2>6: {{ $prediction->sixth }}</h2>
            <h2>7: {{ $prediction->seventh }}</h2>
            <h2>8: {{ $prediction->eighth }}</h2>
            <h2>9: {{ $prediction->nineth }}</h2>
            <h2>10: {{ $prediction->tenth }}</h2>
                <a href="predictions/{{ $prediction->id }}/edit"
                class="border-b-2 pb-2 border-dotted italic text-green-500">
                Edit &rarr;
                </a>
                
        </div>
        </fieldset>
        @endforeach
        </div>
@endsection