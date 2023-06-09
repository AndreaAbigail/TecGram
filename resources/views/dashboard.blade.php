@extends('layouts.app')

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/andrea.jpg') }}" alt="">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-800 text-2xl mt-3"> {{ $user->username }}</p>

                <p class="text-gray-700 text-sm font-bold mt-5"> 0
                    <span class="font-normal">Seguidores</span>
                </p>

                <p class="text-gray-700 text-sm font-bold mt-5"> 0
                    <span class="font-normal">Siguiendo</span>
                </p>

                <p class="text-gray-700 text-sm font-bold mt-5"> 0
                    <span class="font-normal">Publicaciones</span>
                </p>
            </div>
        </div>
    </div>
@endsection
