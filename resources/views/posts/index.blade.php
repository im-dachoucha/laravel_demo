@extends('posts.master')

@section("title", "Posts")
@section("subtitle", "All posts")

@section('content')
    <div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                id
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                title
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                body
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                created_at
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                updated_at
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                actions
                            </th>
                        </tr>
                    </thead>
                    @if (isset($posts) && count($posts))
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->id }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->title }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->body }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->created_at }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->updated_at }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{-- <input class="text-md bg-green-600 text-white rounded-md cursor-pointer py-1 px-2" type="submit" value="edit"> --}}
                                    <a class="text-md bg-green-600 text-white rounded-md cursor-pointer py-1 px-2" href="/posts/edit/{{ $post->id }}">edit</a>
                                    {{-- <a class="text-md bg-green-600 text-white rounded-md cursor-pointer py-1 px-2" href="/posts/delete/{{ $post->id }}">delete</a> --}}
                                <form action="/posts/delete" method="POST" class="text-gray-900 whitespace-no-wrap inline">
                                    @csrf
                                    <input type="text" name="id" value="{{ $post->id }}" hidden>
                                    <input class="text-md bg-red-600 text-white rounded-md cursor-pointer py-1 px-2" type="submit" value="delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                            
                @else
                </table>
                <p class="text-center text-2xl font-bold my-5">no posts yet</p>
                @endif
            </div>
        </div>
@endsection