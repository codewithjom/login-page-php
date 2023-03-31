<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>Login page</title>
  </head>
  <body>
    <div class="flex flex-wrap content-center justify-center w-full min-h-screen py-10 bg-gray-200">
      <div class="flex shadow-md">
        <div class="flex flex-wrap content-center justify-center bg-white rounded-lg">
          <div class="mx-12 w-72 my-14">
            <h1 class="text-xl font-semibold">Login page</h1>
            <small class="text-gray-400">Welcome back! Please enter your details</small>

            <form method="POST" action="./data/validate.php" class="mt-4" >
              <div class="mb-3">
                <label class="block mb-2 text-xs font-semibold">Account ID</label>
                <input type="text" name="userID" placeholder="xxxxx" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
              </div>

              <div class="mb-3">
                <label class="block mb-2 text-xs font-semibold">Password</label>
                <input type="password" name="userPass" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
              </div>
              
              <div class="mb-3 text-center">
                <span class="text-xs font-semibold text-gray-400">Don't have account?</span>
                <a href="./register/" class="text-xs font-semibold text-purple-700">Sign up</a>
              </div>

              <div class="mb-3">
                <button type="submit" name="login" class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
