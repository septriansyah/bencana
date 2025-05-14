<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create an Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center px-6">
  <div class="flex flex-col md:flex-row items-center w-full max-w-5xl shadow-lg rounded-lg">
    <!-- Form Section -->
    <div class="w-full md:w-1/2 p-8">
      <h2 class="text-2xl font-semibold mb-2">Create an account</h2>
      <p class="text-sm text-right mb-6">
        <a href="login.php" class="text-sm text-black underline">log in instead</a>
      </p>

      <form action="signup_process.php" method="POST" class="space-y-4">
        <input type="text" name="name" placeholder="First name" required class="w-full border border-gray-300 px-4 py-2 rounded-md" />
        <input type="email" name="email" placeholder="Email" required class="w-full border border-gray-300 px-4 py-2 rounded-md" />
        <input type="password" name="password" placeholder="Password" required class="w-full border border-gray-300 px-4 py-2 rounded-md" />
        
        <div class="flex items-start">
          <input type="checkbox" required class="mr-2 mt-1" />
          <p class="text-sm">
            By creating an account, I agree to the 
            <a href="#" class="underline">Terms of use</a> and 
            <a href="#" class="underline">Privacy Policy</a>.
          </p>
        </div>

        <button type="submit" class="bg-purple-500 text-white font-semibold w-full py-2 rounded-md">Create an account</button>
        <a href="dashboard.php" class="bg-purple-500 text-white font-semibold w-full py-2 rounded-md text-center block">Back</a>
      </form>

      <div class="flex items-center my-6">
        <hr class="flex-grow border-gray-300">
        <span class="px-3 text-sm text-gray-500">Or</span>
        <hr class="flex-grow border-gray-300">
      </div>

      <a href="#" class="w-full flex items-center justify-center gap-2 border border-gray-300 py-2 rounded-md hover:bg-gray-100">
        <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5 h-5">
        <span>Continue with Google</span>
      </a>
    </div>

    <!-- Illustration Section -->
    <div class="hidden md:flex w-1/2 justify-center items-center">
      <img src="layout/aset/12242529_4901198.jpg" alt="Laptop Illustration" class="w-3/4">
    </div>
  </div>
</body>
</html>

