@extends('_layouts.main')

@section('head')
    @include('_partials.social', [
        'title' => $page->title,
        'description' => $page->excerpt,
    ])
@endsection

@section('body')
    @include('_partials.back-home-link')

    <div class="pt-10 md:pt-20 prose mx-auto">
        <h1 class="text-center text-balance">{{ $page->title }}</h1>

        <div class="flex items-center justify-center space-x-2 text-xs font-semibold text-gray-500 uppercase">
            <p>{{ $page->author }}</p>
            <span class="w-1 h-1 bg-gray-700 rounded-full"></span>
            <time datetime="{{ $page->date }}">{{ date('F j, Y', $page->date) }}</time>
        </div>
    </div>

    <div class="mx-auto space-y-4 prose">
        @yield('content')
    </div>
@endsection
