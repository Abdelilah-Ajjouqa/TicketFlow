<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden max-w-md w-full">
        <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-6">
            <h1 class="text-white text-2xl font-bold">Create an Account</h1>
            <p class="text-green-100 mt-2">Join our community today</p>
        </div>

        <form id="registrationForm" method="POST" action="{{ route('register') }}" class="p-6 space-y-6">
            <div>
                <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="fullName" name="fullName" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                    placeholder="Enter your full name">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                    placeholder="Enter your email">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                    placeholder="Create a password">
            </div>

            <div>
                <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                    Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                    placeholder="Confirm your password">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                <div class="flex space-x-4">
                    <div class="flex items-center">
                        <input type="radio" id="client" name="role" value="client" checked
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300">
                        <label for="client" class="ml-2 text-gray-700">Client</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="developer" name="role" value="developer"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300">
                        <label for="developer" class="ml-2 text-gray-700">Developer</label>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-medium rounded-md hover:from-green-600 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                    Register
                </button>
            </div>

            <div class="text-center text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('show.login') }}" class="font-medium text-green-600 hover:text-green-500">Sign in</a>
            </div>
        </form>
    </div>
</body>

</html>
