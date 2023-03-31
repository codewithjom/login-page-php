<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Login page</title>
  </head>
  <body>
    <div class="flex flex-wrap content-center justify-center w-full min-h-screen py-10 bg-gray-200">
      <div class="flex shadow-md">
        <div class="flex flex-wrap content-center justify-center bg-white rounded-lg">
          <div class="mx-12 w-96 my-14">
            <h1 class="text-xl font-semibold">Register</h1>
            <small class="text-gray-400">Create new account</small>

            <form method="POST" action="./regUser.php" class="mt-4">
              <div class="flex space-x-4">
                <div class="mb-3">
                  <label class="flex text-sm font-semibold">First name*</label>
                  <input type="text" name="firstname" placeholder="Peter" class="rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                </div>
                <div class="mb-3">
                  <label class="flex text-sm font-semibold">Last name*</label>
                  <input type="text" name="lastname" placeholder="Parker" class="rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                </div>
              </div>
              
              <div class="mb-5">
                <div class="mb-3">
                  <label class="flex text-sm font-semibold">Password*</label>
                  <input type="password" name="userPass" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                </div>
                <div class="mb-3">
                  <label class="flex text-sm font-semibold">Admin password*</label>
                  <input type="password" name="adminPass" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                </div>
              </div>

              <div class="flex space-x-2">
                <button type="submit" name="login" class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Register</button>
                <button class="mb-1.5 block w-32 text-center text-white bg-stone-700 hover:bg-stone-900 px-2 py-1.5 rounded-md">
                  <a href="../index.php">Back</a>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
