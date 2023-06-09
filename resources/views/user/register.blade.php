@include('partials.header')
    <header class="max-w-lg mx-auto my-10">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Student Registration</h1>
        </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Welcome to Student Registration</h3>
            <p class="text-gray pt-2">Sign up to your account</p> 
        </section>
        <section class="mt-3">
            <form action="/store" method="POST" class="flex flex-col">
                @csrf
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="name" class="block gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="bg-gray-200 rounded w-full  text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                    @error('name')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="email" class="block gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="bg-gray-200 rounded w-full  text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('email')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="password" class="block gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password" class="bg-gray-200 rounded w-full  text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('password')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                 <div class="mb-6 pt-3 bg-gray-200">
                    <label for="password_confirmation" class="block gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full  text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('password_confirmation')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <button class="bg-gray-800 text-white hover:bg-gray-100 hover:text-gray-800 font-bold py-2 rounded shadow-xl transition duration-200" type="submit">Sign Up</button>

            </form>

        </section>
        <section>
            <p class="mt-3 text-gray ">Already have an account? <a href="{{url('login')}}" class="hover:text-gray-400 font-bold transition duration-200">Sign In Here</a></p>
        </section>


    </main>

@include('partials.footer')