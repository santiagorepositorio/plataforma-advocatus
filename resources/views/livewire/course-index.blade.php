<div>

    {{-- Barra de Navegacion --}}
    <div class="bg-gray-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 focus:outline-none" wire:click='"resetFilters'>
                <i class="fa-solid fa-layer-group text-xs mr-2"></i>
                Todos los cursos
            </button>

            {{-- Dropdowns Categorias --}}

            <div class="relative mr-4" x-data="{ open: false}">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = !open">
                    <i class="fa-solid fa-tags text-sm mr-2"></i>
                    Categoria
                    <i class="fa-solid fa-angle-down text-sm ml-2"></i>
                </button>

                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-show="open" x-on:click.away=" open = false">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('category_id', {{$category->id}})" x-on:click="open = false">{{$category->name}}</a>
                        @endforeach
                </div>
            </div>

            {{-- Dropdowns Niveles --}}

            <div class="relative" x-data="{ open: false}">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = !open">
                    <i class="fa-solid fa-tags text-sm mr-2"></i>
                    Niveles
                    <i class="fa-solid fa-angle-down text-sm ml-2"></i>
                </button>

                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-show="open" x-on:click.away=" open = false">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id', {{$level->id}})" x-on:click="open = false">{{$level->name}}</a>
                        @endforeach
                </div>
            </div>

        </div>
    </div>

    {{-- Paginacion de los cursos --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

        @foreach ($courses as $course)
            <div>
                <x-course-card :course="$course" />
            </div>
        @endforeach

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$courses->links()}}
    </div>

</div>
