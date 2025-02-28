<x-header>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden max-w-md w-full">
            <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-6">
                <h1 class="text-white text-2xl font-bold">Welcome Back</h1>
                <p class="text-green-100 mt-2">Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="p-6 space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                        placeholder="Enter your email">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                        placeholder="Enter your password">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full py-2 px-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-medium rounded-md hover:from-green-600 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors">
                        Sign In
                    </button>
                </div>

                <div class="text-center text-sm text-gray-500">
                    Don't have an account?
                    <a href="{{ route('show.register') }}" class="font-medium text-green-600 hover:text-green-500">Register</a>
                </div>
            </form>
        </div>
    </div>
</x-header>
