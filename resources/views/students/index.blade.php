@include('partials.header')
<x-nav/>
<x-messages/>
    <header class="max-w-lg mx-auto mt-5 mb-5">
            <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
    </header>    
    <section>
        <div class="rounded-lg">
                    <div class="overflow-x-auto relative mx-auto rounded">
                        <table class="mx-auto w-96 text-sm text-left text-gray-800 mx-5 p-5">
                            <thead class="text-xs text-gray-700 uppercase bg-white border-b border-gray-800 ml-3">
                                <tr>
                                    <th scope="col" class="py-4 px-6">First Name</th>
                                    <th scope="col" class="py-4 px-6">Last Name</th>
                                    <th scope="col" class="py-4 px-6">Email</th>
                                    <th scope="col" class="py-4 px-6">Age</th>
                                    <th scope="col" class="py-4 px-6">Gender</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr class="bg-white border-b border-gray-800 ml-3">
                                    <td class="py-4 px-6">{{$student->first_name}}</td>
                                    <td class="py-4 px-6">{{$student->last_name}}</td>
                                    <td class="py-4 px-6">{{$student->email}}</td>
                                    <td class="py-4 px-6">{{$student->age}}</td>
                                    <td class="py-4 px-6">{{$student->gender}}</td>
                                    <td class="py-4 px-6"> <a href="{{url('student/'. $student->id)}}" class="bg-gray-800 text-white px-4 py-2 hover:font-bold rounded">View</a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        <div class="mx-auto max-w-lg pt-6 p-4">
                            {{$students->links()}}
                        </div>
                        
                    </div>
        </div>
        
    </section>

@include('partials.footer')

{{-- <ul class=" ml-3">
        @foreach ($students as $student)
        <li>{{$student->first_name}} {{$student->last_name}}</li>
        @endforeach
    </ul> --}}