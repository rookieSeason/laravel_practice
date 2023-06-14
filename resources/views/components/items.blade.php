 <ul class="flex flex-col md:flex-row px-4">
    @auth
        <li>
            <a href="/add/student" class="block py-2 pr-4 pl-3 hover:font-bold text-gray-800">Add Student</a>
        </li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button class="block py-2 pr-4 pl-3 hover:font-bold text-gray-800">Sign Out</button>
            </form>
            
        </li>
    @endauth
</ul>