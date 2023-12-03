<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Update</title>
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

    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-10">
        <h1 class="text-2xl font-semibold mb-6">Update the Post</h1>

        <!-- Post Form -->
        <form action="/updatedPost/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div class="mb-4">
                <label for="postTitle" class="block text-gray-600 text-sm font-medium mb-2">Title:</label>
                <input type="text" id="tile" name="title" value="{{$post->title}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <!-- Content Textarea -->
            <div class="mb-6">
                <label for="postContent" class="block text-gray-600 text-sm font-medium mb-2">Content:</label>
                <textarea id="body" name="body" placeholder="Enter post content" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                {{$post->body}}
                </textarea>
            </div>

            <!-- Save Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Update
            </button>
        </form>
    </div>
</body>

</html>