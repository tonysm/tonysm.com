@extends('_layouts.main')

@section('head')
    @include('_partials.social', [
        'title' => 'Tony Messias',
        'description' => "Hey, there. I'm a programer from Brazil. This is my personal website and blog.",
    ])
@endsection

@section('body')
    <div class="py-8">
        <div class="w-full max-w-2xl mx-auto text-gray-800">
            <section class="flex items-center gap-4 space-y-0">
                <img src="/assets/images/profile.jpg" alt="Tony Messias" class="w-40 h-40 rounded bg-gray-200 object-cover shadow" />

                <div>
                    <h1 class="uppercase font-bold">Tony Messias</h1>
                    <p class="">Programmer at <a class="text-indigo-600" href="https://tighten.com/">Tighten</a>.</p>
                </div>
            </section>

            <div class="space-y-4">
                <h2 class="uppercase mt-8">Open-Source</h2>

                <p>I have a couple of open-source packages you may be interested in checking out. I've been trying to bridge the Rails and Laravel worlds!</p>

                <ul class="ml-4 list-inside list-disc space-y-1">
                    @foreach ($repositories as $repository)
                    <li><a class="text-indigo-500" href="{{ $repository->link }}">{{ $repository->name }}</a>: {{ $repository->description }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="space-y-4">
                <h2 class="uppercase mt-8">Courses</h2>

                <p>Sometimes I record a screencast about a topic I'm tinkering, a problem I've encountered, or a tool that I'm building or learning.</p>

                <ul class="ml-4 list-inside list-disc space-y-1">
                    @foreach ($courses as $course)
                    <li><a class="text-indigo-600" href="{{ $course->link }}">{{ $course->name }}:</a> {{ $course->description }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="space-y-4">
                <h2 class="uppercase mt-8">Writings</h2>
                <p>My technical writings are hosted here, but I also have a <a
                    class="text-indigo-600 underline"
                            href="https://world.hey.com/tonysm">Hey
                        World</a> newsletter. Subscribe there if you want to receive updates and new posts.</p>

                <ul class="ml-4 list-inside list-disc space-y-1">
                    @foreach ($posts as $post)
                        <li>
                            <a class="text-indigo-600" href="{{ $post->getUrl() }}">
                                {{ $post->title }}
                            </a>

                            <time datetime="{{ $post->date }}"
                                  class="text-sm text-gray-500">{{ date('F j, Y', $post->date) }}</time>
                        </li>
                    @endforeach
                </ul>
            </div>

            <section class="mt-8 bg-gray-100 rounded-lg shadow-sm p-6 text-center">
                <p>
                    Want to receive updates on new content? Here's my <a href="/rss" class="underline">RSS feed</a>. <br class="hidden sm:inline" />
                    My email address is <a href="mailto:tonysm@hey.com">tonysm@hey.com</a>
                </p>
            </section>
        </div>
    </div>
@endsection
