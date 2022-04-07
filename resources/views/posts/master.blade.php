<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="bg-white p-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">@yield('subtitle')</h2>
            </div>
            <div class="flex items-center justify-between">
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <a href="{{ route('posts') }}" class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Posts list</a>
                        <a href="{{ route('create_post') }}" class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New post</a>
                    </div>
                </div>
            </div>
            {{-- <div class="mb-10 md:mb-16">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">@yield('subtitle')</h2>
            </div> --}}
            @yield('content')
        </div>
    </div>
</body>
</html>