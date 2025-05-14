<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
  <div class="bg-gray-800 rounded-2xl shadow-lg flex w-full max-w-5xl overflow-hidden">
    
    <!-- Left: Login Form -->
    <div class="w-full md:w-1/2 p-10 text-white">
    <!-- Logo -->
    <div class="mb-6">
        <div class="to-pink-500 flex items-center justify-center text-white font-bold text-lg">
        <span>SIGAP+</span>
        </div>
    </div>


      <h2 class="text-2xl font-semibold mb-2">Welcome back 👋</h2>
      <p class="mb-6 text-sm text-gray-400">We are happy to have you back</p>

      <form action="login_process.php" method="POST" class="space-y-4">
        <div>
          <label class="block text-sm mb-1">Email Address*</label>
          <input type="email" name="email" placeholder="Enter your email address" required
            class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div>
          <label class="block text-sm mb-1">Password</label>
          <input type="password" name="password" placeholder="Enter your password" required
            class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-purple-500" />
        </div>

        <div class="flex items-center text-sm">
          <input type="checkbox" required class="mr-2 accent-purple-500" />
          <span>I agree to terms & conditions</span>
        </div>

        <button type="submit"
          class="w-full py-2 bg-purple-600 hover:bg-purple-700 rounded-md font-semibold text-white">Login</button>
          <button type="submit"
          class="w-full py-2 bg-purple-600 hover:bg-purple-700 rounded-md font-semibold text-white">Back</button>
      </form>

      <!-- Or divider -->
      <div class="flex items-center my-6">
        <hr class="flex-grow border-gray-600">
        <span class="px-3 text-sm text-gray-400">Or</span>
        <hr class="flex-grow border-gray-600">
      </div>

      <!-- Google Login -->
      <a href="#" class="w-full flex items-center justify-center gap-2 border border-gray-600 py-2 rounded-md bg-black hover:bg-gray-900">
        <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5 h-5">
        <span>Login with Google</span>
      </a>

      <!-- Register -->
      <p class="text-sm text-center text-gray-400 mt-6">Don't have an account? <a href="signup.php" class="underline">Register</a></p>
    </div>

    <!-- Right: Image / Illustration -->
    <div class="hidden md:flex w-1/2 items-center justify-center bg-gray-900 p-6">
    <img src="layout/aset/38685814_8571908.jpg" alt="Login Illustration" class="rounded-xl w-full object-contain">

    </div>

  </div>
</body>
</html>
