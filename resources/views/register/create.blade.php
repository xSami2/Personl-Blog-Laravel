<x-layout>


    <section class="px-6 py-8">


          <main class="max-w-lg m-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200" >
    <h1 class="text-center text-xl font-bold">Register</h1>

              <form method='POST' action="/register " class="mt-10">
                             @csrf
                  <div class="mb-6">
                      <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                      <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" required>
                  </div>

                   <div class="mb-6">
                  <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                  <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" required>
                  </div>

                  <div class="mb-6">
                      <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                      <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" required>
                  </div>

                  <div class="mb-6">
                      <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                      <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                  </div>

                  <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                  </div>


              </form>


          </main>



            </section >

</x-layout>
