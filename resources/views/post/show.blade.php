<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post -</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <nav class="fixed ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('post.index') }}" class="btn text-sm text-white font-bold bg-blue-500 py-3 px-4 rounded-xl">
                Go back
            </a>
        </div>
    </nav>

    <div class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto ">
            <div class="overflow-hidden rounded-t-lg">
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full">
            </div>
            <div class="p-6">
                <h1 class="text-7xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>
                <p class="text-gray-700 mb-6">{{ $post->description }}</p>
                <div class="prose max-w-none">
                    {!! $post->content !!}
                </div>

                <div class="py-5">
                    <a href="{{ route('post.edit', $post->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Edit</a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.1/dist/flowbite.min.js"></script>
</body>
</html>
