@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-6/12 bg-red-200 text-center p-5 rounded-md">
      Bitácora de mantenimientos preventivos
    </div>
  </div>

  <div class="flex justify-center">
    <div class="mb-8">
      <label for="name" class="sr-only">NombreTrabajador</label>
      <input type="text" name="name" id="regName" placeholder="Escribe tu nombre aquí"
      class="bg-gray-100 border-2 w-full p-4 rounded-lg
      @error('name')border-red-500 @enderror" value="{{ old('name') }}">
      @error('name')
        <div class="text-red-500 mt-2 text-sm">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>
@endsection
