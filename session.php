<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-700 text-center">Register</h2>
    <form action="#" method="POST">
      
      <div class="mb-4">
        <label class="block font-semibold mb-2" for="name"><span class="text-red-700">*</span>Name</label>
        <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-gray-200" type="text" id="name" name="name" placeholder="Enter your name" required />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2" for="email"><span class="text-red-700">*</span>Email</label>
        <input class="w-full px-4 py-2 border rounded-lg bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400" type="email" id="email" name="email" placeholder="Enter your email" required />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2" for="password"><span class="text-red-700">*</span>Password</label>
        <input class="w-full px-4 py-2 border bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" type="password" id="password" name="password" placeholder="Enter your password" required />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2" for="confirm-password"><span class="text-red-700">*</span>Confirm Password</label>
        <input class="w-full px-4 py-2 border bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required />
      </div>

      <button class="w-full bg-blue-900 font-bold text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300" type="submit" name="register">Register</button>
    </form>
  </div>
</body>
</html>
