<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl font-bold text-center mb-6 mt-8 shadow-md ">EMPLOYEE APPLICATION MANAGEMENT SYSTEM</h1>
    <form action="{{ route('user.login') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md  mt-8">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" name="username" id="name" class="w-full border-gray-300 rounded mt-1" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full border-gray-300 rounded mt-1" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        <p class="mt-4 text-sm">Already have an account? <a href="{{ route('register.form') }}" class="text-blue-500 hover:underline">Login</a></p>
    </form>
</body>
</html>
