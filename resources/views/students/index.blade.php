@include('partials.header')
<x-nav/>
    <header class="max-w-lg mx-auto mt-5 mb-5">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
        </a>
    </header>    
    <section>
        <div class="overflow-x-auto relative mx-3 rounded">
            <table class="w-full text-sm text-left text-gray-800">
                <thead class="text-xs text-gray-700 uppercase bg-white borber-bottom border-gray-800">
                    <tr>
                        <th scope="col" class="py-4 px-6">First Name</th>
                        <th scope="col" class="py-4 px-6">Last Name</th>
                        <th scope="col" class="py-4 px-6">Email</th>
                        <th scope="col" class="py-4 px-6">Age</th>
                        <th scope="col" class="py-4 px-6">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-white border-b border-gray-800">
                        <td class="py-4 px-6">{{$student->first_name}}</td>
                        <td class="py-4 px-6">{{$student->last_name}}</td>
                        <td class="py-4 px-6">{{$student->email}}</td>
                        <td class="py-4 px-6">{{$student->age}}</td>
                        <td class="py-4 px-6">{{$student->gender}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </section>

@include('partials.footer')

{{-- <ul class=" ml-3">
        @foreach ($students as $student)
        <li>{{$student->first_name}} {{$student->last_name}}</li>
        @endforeach
    </ul> --}}