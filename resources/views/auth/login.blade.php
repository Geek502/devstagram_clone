@extends('layouts.app')

@section('titulo')
   Inicia Sesion en Desvstagram
@endsection

@section('contenido')
    
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen login usuarios">
        </div>
        
        <div class="md:w-4/12 bg-white rounded-lg p-6 shadow-xl">
            <form method="post" action="{{route('login')}}" novalidate>
                @csrf

                @if(session('mensaje'))
                <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">
                    {{session('mensaje')}}</p>
                @endif

                <div class="m-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="text"
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Tu Email"
                    class="border p-3 w-full rounded-lg @error('email') border-red-600 @enderror"
                    value="{{old('email')}}"
                    >
                </div>
                @error('email')
                    <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">{{$message}}</p>
                @enderror

                <div class="m-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="text"
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Contraseña"
                    class="border p-3 w-full rounded-lg @error('password') border-red-600 @enderror"
                    value="{{old('password')}}"
                    >
                </div>
                @error('password')
                    <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">{{$message}}</p>
                @enderror

               <input type="submit"
                      value="Crear Cuenta" 
                      class="bg-sky-600 cursor-pointer p-2 rounded-lg hover:bg-sky-700 uppercase text-white w-full"
               >
            </form>
        </div>

    </div>

@endsection