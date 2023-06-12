
@if (session()->has('message'))
    <h1 class="mt-5 text-white">{{session('message')}}</h1>
@endif