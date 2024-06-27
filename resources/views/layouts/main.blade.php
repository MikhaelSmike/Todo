<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Todo List | @stack('head')</title>
</head>
<body class="bg-gray-100">
    <div class="bg-gray-600 my-2 w-10/12 mx-auto"> 
        <div class="container mx-auto py-3">
            <h1 class="text-white text-center text-3xl">Todo List App</h1>
        </div>
    </div>
    @yield('main-section')
</body>
</html>