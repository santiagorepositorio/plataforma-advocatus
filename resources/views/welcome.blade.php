<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/people-2557396_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Aprende a programar</h1>
                <p class="text-white text-lg mt-2 mb-4">Descubre los mejores cursos de programación</p>

                @livewire('search')

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/stones-8265502_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos online</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure doloremque dolor qui porro quisquam?</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/ocean-8285752_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Diseño web</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure doloremque dolor qui porro quisquam?</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/sunrise-8290940_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Asesorías</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure doloremque dolor qui porro quisquam?</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/tree-8290838_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure doloremque dolor qui porro quisquam?</p>

            </article>

        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">

        <h1 class="text-center text-white text-3xl">Aprende a programar</h1>
        <p class="text-center text-white">Descubre los mejores cursos de programación</p>

        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálago de cursos
            </a>
        </div>

    </section>

    <section class="my-24">

        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Enterate cuales son los últimos cursos de desarrollo web subidos</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach

        </div>

    </section>

</x-app-layout>
