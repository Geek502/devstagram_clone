@extends('layouts.app')

@section('titulo')
Crea una nueva publicación
@endsection

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
          <form action="{{route('imagenes.store')}}" id="dropzone"  class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center" method="POST" enctype="multipart/form-data">
                @csrf
          </form>
        </div>

        <div class="md:w-1/2 px-10 bg-white rounded-lg p-6 shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="m-5">
                        <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold p-4">Titulo</label>
                        <input type="text"
                        id="titulo"
                        name="titulo"
                        type="text"
                        placeholder="Titulo de la publicación"
                        class="border p-3 w-full @error('name') border-red-600 @enderror"
                        value="{{old('titulo')}}"
                        >

                        @error('titulo')
                    <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">{{$message}}</p>
                @enderror
                </div>

                <div class="m-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold p-4">Descripción</label>
                    <textarea type="text"
                    id="descripcion"
                    name="descripcion"
                    placeholder="Descripcion de la publicación"
                    class="border p-3 w-full @error('name') border-red-600 @enderror"
                    >{{old('titulo')}}</textarea>

                    @error('titulo')
                <p class="bg-red-500  rounded-lg s text-white text-center font-bold uppercase">{{$message}}</p>
            @enderror
            </div>
                <input type="submit"
                    value="Crear publicación" 
                    class="bg-sky-600 cursor-pointer p-2 rounded-lg hover:bg-sky-700 uppercase text-white w-full"
                >
            </form>
        </div>
    </div>
@endsection


<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>