<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>User Account</title>
</head>

<body>

    <nav class="bg-white border-gray-200 dark:bg-gray-600">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CRUD</span>
            </a>

            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="/account" class="text-xl text-white ">
                    account
                </a>

                <a href="/logout" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        logout
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <div class="m-7 p-5 text-xl border-solid border border-black rounded-lg">
        <h2>All Post </h2>
        <div class="flex flex-wrap items-start justify-evenly">
            @foreach($posts as $post)
            <div class="block w-80 h-40 p-6 mt-2 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post['title']}}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{$post['body']}}</p>
                </a>
                <div class="mt-3 flex">
                    <a href="/update_post/{{$post->id}}">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            update
                        </button>
                    </a>
                    <form action="/delete_post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">
                            delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>