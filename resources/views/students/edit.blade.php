@include('partials.header')
<x-messages/>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Edit {{$student->first_name}} {{$student->last_name}} Info</h3>
        </section>
        <section class="mt-3">
            <form action="{{url('student/'. $student->id)}}" method="POST" class="flex flex-col">
                @method('PUT')
                @csrf
                
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="first_name" class="block gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
                    <input type="text" value="{{$student->first_name}}" name="first_name" class="bg-gray-200 rounded w-full text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('first_name')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="last_name" class="block gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                    <input type="text" value="{{$student->last_name}}" name="last_name" class="bg-gray-200 rounded w-full text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('last_name')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="gender" class="block gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                    <select name="gender" class="bg-gray-200 rounded w-full text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                        <option value="" {{$student->gender == "" ? 'selected' : ''}}>...</option>
                        <option value="Male" {{$student->gender == "Male" ? 'selected' : ''}}>Male</option>
                        <option value="Female" {{$student->gender == "Female" ? 'selected' : ''}}>Female</option>
                    </select>
                     @error('gender')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="age" class="block gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                    <input type="number" value="{{$student->age}}" name="age" class="bg-gray-200 rounded w-full text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('age')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 bg-gray-200">
                    <label for="email" class="block gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" value="{{$student->email}}" class="bg-gray-200 rounded w-full  text-gray-800 focus:outline-none border-b-4 border-gray-800 px-3">
                     @error('email')
                        <p class="text-red-500 text-sm p-1">{{$message}}</p>
                    @enderror
                </div>
                <button class="bg-green-500 text-white hover:bg-green-300 hover:text-gray-900 font-bold py-2 rounded shadow-xl transition duration-200" type="submit">Update</button>
            </form>
            <form action="{{url('student/'.$student->id)}}" method="POST">
                @method('delete')
                @csrf
                <button class="w-full mt-3 bg-red-500 text-white hover:bg-red-300 hover:text-gray-900 font-bold py-2 rounded shadow-xl transition duration-200" type="submit">Delete</button>

            </form>
            
        </section>

@include('partials.footer')