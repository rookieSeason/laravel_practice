<nav x-data="{open:false}" class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 text-gray-800 fixed w-full top-0 left-0 z-20 shadow-lg">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                Student System
            </span>
        </a>
        <button @click="open = !open" class="md:hidden">
            <i class="fa-solid fa-bars fa-2x"></i>
        </button>
        <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
            <x-items/>
        </div>
    <div class=" hidden w-full md:block md:w-auto" id="navbar-main">
        <x-items/>
    </div>
    </div>
    
</nav>