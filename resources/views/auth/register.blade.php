@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro usuarios">
        </div>
        
        <div class="md:w-4/12 bg-white rounded-lg p-6 shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="m-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold p-4">Nombre *</label>
                        <input type="text"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full @error('name') border-red-600 @enderror"
                        value="{{old('name')}}"
                        >

                        @error('name')
                    <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">{{$message}}</p>
                @enderror
                </div>
                

                <div class="m-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text"
                    id="username"
                    name="username"
                    type="text"
                    placeholder="Tu Username"
                    class="border p-3 w-full rounded-lg @error('username') border-red-600 @enderror"
                    value="{{old('username')}}"
                    >
                </div>
                @error('username')
                    <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">{{$message}}</p>
                @enderror

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

                <div class="m-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir contraseña</label>
                    <input type="text"
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repetir contraseña"
                    class="border p-3 w-full rounded-lg"
                    >
                </div>
               <input type="submit"
                      value="Crear Cuenta" 
                      class="bg-sky-600 cursor-pointer p-2 rounded-lg hover:bg-sky-700 uppercase text-white w-full"
               >
            </form>
        </div>

    </div>

@endsection