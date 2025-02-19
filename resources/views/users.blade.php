<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User Page</title>
</head>

<body class="bg-gray-100 p-4">
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-600 text-green-700 p-4 rounded-md max-w-lg mx-auto">
            {{ session('success') }}
        </div>
        {{-- flame is the best  --}}
    @endif
    <a style="text-4xl" href="/">Go to add data</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mt-6">
        @foreach ($users as $user)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img class="w-[400px] h-[250px] object-cover rounded-t-lg" src="images/{{ $user->image }}"
                    alt="Profile Image">
                <div class="p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-xl">{{ $user->name }}</h2>
                        <div class="flex space-x-3">
                            <a href="/edit/{{ $user->id }}" class="text-blue-500 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 010 2.828L8.414 14.414a2 2 0 01-.707.465l-4 1.333a1 1 0 01-1.267-1.267l1.333-4a2 2 0 01.465-.707L14.586 2.586a2 2 0 012.828 0zM13 6l1 1-8 8H5v-1l8-8z" />
                                </svg>
                            </a>
                            <a href="/delete/{{ $user->id }}" class="text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M6 3a1 1 0 011-1h6a1 1 0 011 1v1h3a1 1 0 110 2h-1v10a2 2 0 01-2 2H5a2 2 0 01-2-2V6H2a1 1 0 110-2h3V3zm2 3a1 1 0 10-2 0v8a1 1 0 102 0V6zm4 0a1 1 0 10-2 0v8a1 1 0 102 0V6zm4 0a1 1 0 10-2 0v8a1 1 0 102 0V6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <p class="text-gray-700 text-base mt-3">{{ $user->about }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
