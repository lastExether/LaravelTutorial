@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
     <div class="w-6/12 bg-white p-6 rounded-lg">
       <form class="" action="{{ route('register') }}" method="post">
         @csrf

         <div class="mb-4">
           <label for="name" class="sr-only">Name</label>
           <input type="text" name="name" id="regName" placeholder="Your Name"
           class="bg-gray-100 border-2 w-full p-4 rounded-lg
           @error('name')border-red-500 @enderror" value="{{ old('name') }}">
           @error('name')
             <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
             </div>
           @enderror
         </div>

         <div class="mb-4">
           <label for="username" class="sr-only">Username</label>
           <input type="text" name="username" id="regUsername" placeholder="Your Username"
           class="bg-gray-100 border-2 w-full p-4 rounded-lg
           @error('username')border-red-500 @enderror" value="{{ old('username') }}">
           @error('username')
             <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
             </div>
           @enderror
         </div>

         <div class="mb-4">
           <label for="email" class="sr-only">Email</label>
           <input type="text" name="email" id="regEmail" placeholder="Your Email"
           class="bg-gray-100 border-2 w-full p-4 rounded-lg
           @error('email')border-red-500 @enderror" value="{{ old('email') }}">
           @error('email')
             <div class="text-red-500 mt-2 text-sm">
               {{ 'Are you an idiot?' }}
             </div>
           @enderror
         </div>

         <div class="mb-4">
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" id="regPassword" placeholder="Type your Password"
           class="bg-gray-100 border-2 w-full p-4 rounded-lg
           @error('password')border-red-500 @enderror" value="">
           @error('password')
             <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
             </div>
           @enderror
         </div>

         <div class="mb-4">
           <label for="password_confirmation" class="sr-only">Password again</label>
           <input type="password" name="password_confirmation" id="regPasswordConf" placeholder="Repeat your Password"
           class="bg-gray-100 border-2 w-full p-4 rounded-lg
           @error('password_confirmation')border-red-500 @enderror" value="">
           @error('password_confirmation')
             <div class="text-red-500 mt-2 text-sm">
               {{ $message }}
             </div>
           @enderror
         </div>

         <div class="mb-4">
           <button type="submit" class="bg-blue-600 text-white px-4 py-3 w-full p-4 rounded font-medium w-full">Submit</button>
         </div>
       </form>
     </div>
   </div>
@endsection
