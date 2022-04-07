@extends('posts.master')

@section("title", "Crate")
@section("subtitle", "Add new post")

@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    {{-- <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Add new post</h2>

    </div> --}}
    <!-- text - end -->

    <!-- form - start -->
    <form action="{{ route('create_post') }}" method="POST" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
        @csrf
      <div>
          <label for="title" class="inline-block text-gray-800 text-sm sm:text-base mb-2">title</label>
          @error('title')
                     <div class="text-red-500 mt-2 text-sm" role="alert">
                    {{ $message }}
                </div>
          @enderror
          <input name="title" id="title" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" value="{{ old('title') }}"/>
      </div>

      <div class="sm:col-span-2">
          <label for="body" class="inline-block text-gray-800 text-sm sm:text-base mb-2">body</label>
          @error('body')
               <div class="text-red-500 mt-2 text-sm" role="alert">
                   {{ $message }}
               </div>
         @enderror
          <textarea name="body" id="body" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ old("body") }}</textarea>
      </div>

      <div class="sm:col-span-2 flex justify-between items-center">
        <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Add</button>
      </div>

    </form>
    <!-- form - end -->
  </div>
</div>
@endsection