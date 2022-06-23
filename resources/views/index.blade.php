@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Predictions
            </h1>
        </div>
    </div>

    <div class="w-5/6 py-10">
        @foreach ($predictions as $prediction)
        <div class="m-auto">
            <h2 class="text-gray-700 text-5xl">
                1: {{ $prediction->first }}
            </h2>
            <h2 class="text-gray-700 text-5xl">
                2: {{ $prediction->second }}
            </h2>
            <h2 class="text-gray-700 text-5xl">
                3: {{ $prediction->third }}
            </h2>
            <h2 class="text-gray-600 text-4xl">
                4: {{ $prediction->fourth }}
            </h2>
            <h2 class="text-gray-600 text-4xl">
                5: {{ $prediction->fifth }}
            </h2>
            <h2 class="text-gray-600 text-4xl">
                6: {{ $prediction->sixth }}
            </h2>
            <h2 class="text-gray-600 text-4xl">
                7: {{ $prediction->seventh }}
            </h2>
            <h2 class="text-gray-600 text-3xl">
                8: {{ $prediction->eighth }}
            </h2>
            <h2 class="text-gray-600 text-3xl">
                9: {{ $prediction->nineth }}
            </h2>
            <h2 class="text-gray-600 text-3xl">
                10: {{ $prediction->tenth }}
            </h2>
            <hr class="mt-4 mb-8">
        </div>
        @endforeach
    </div>
@endsection