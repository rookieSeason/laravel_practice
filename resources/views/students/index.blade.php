
    <ul class=" ml-3">
        @foreach ($students as $student)
        <li>{{$student->first_name}} {{$student->last_name}}</li>
        @endforeach
    </ul>
