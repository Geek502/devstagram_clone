@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5 ">
               <img src="{{asset('img/avatar-people-profile-svgrepo-com.svg')}}" alt="imagen usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center  md:justify-center md:items-start py-10">
                <p class="text-gray-700 text-2xl">{{$user->username}}</p>
                    
                <p class="text-gray-800 text-sm font-bold mb-3" >0<span class="font-normal"> Seguidores</span></p>
                <p class="text-gray-800 text-sm font-bold mb-3" >0<span class="font-normal"> Siguiendo</span></p>
                <p class="text-gray-800 text-sm font-bold mb-3" >0<span class="font-normal"> Post</span></p>

            </div>
        </div>
    </div>
@endsection