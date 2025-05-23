<x-layouts.guest>
    <header>
        <div class="mt-10 flex justify-center items-center gap-5">
            <small class="text-primary">For artisans</small>
            <x-icon-toggle-right/>
            <small>For customers</small>
        </div>

        <div class="w-full flex flex-col md:flex-row md:gap-40 md:justify-center md:items-center">
            <div class="text-center mt-10 md:text-left">
                <h1 class="font-normal">Handwerker leicht gemacht</h1>
                <p>All the services you need in one place.</p>
            </div>

            <div class="mt-10 flex justify-center items-center">
                <img src="{{ Vite::asset('resources/images/hero.png') }}" alt="Hero Image">
            </div>
        </div>

        <div class="flex justify-center items-center gap-5">
            <a href="#">
                <button
                    class="text-xs font-semibold cursor-pointer mt-10 flex justify-center px-10 py-4 text-black transition duration-300 ease-in-out bg-transparent border border-orange-600 rounded-xl hover:bg-orange-600 focus:outline-none hover:text-white focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                    Anfrage Posten
                </button>
            </a>
            <a href="{{ route('register') }}">
                <button
                    class="text-xs font-semibold cursor-pointer mt-10 flex justify-center px-10 py-4 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-xl hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                    Hausmeister Finden
                </button>
            </a>
        </div>

        {{--<form action="" method="get"></form>--}}
    </header>

    <section class="mt-20 flex flex-col justify-center">
        <h2 class="relative w-fit m-auto">
            Why people like us
            <x-icon-brushed class="absolute right-[20px] top-[60px]"/>
        </h2>

        <div class="mt-10 flex flex-col gap-4">
            <div class="flex justify-center items-center gap-3">
                <x-icon-check-sm/>
                <p class="font-medium">No hidden costs: only a transparent monthly fee.</p>
            </div>
            <div class="flex justify-center items-center gap-3">
                <x-icon-check-sm/>
                <p class="font-medium">Targeted orders: Find jobs that fit your skills.</p>
            </div>
            <div class="flex justify-center items-center gap-3">
                <x-icon-check-sm/>
                <p class="font-medium">Immediate bookings: Communicate directly with customers in chat.</p>
            </div>
        </div>
    </section>

    <section class="mt-20">
        <h2 class="text-center">What you can offer</h2>

        <div class="flex flex-col gap-3 max-w-[600px] m-auto">
            <div class="flex justify-evenly gap-3">
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-home_repair/>
                    <h6 class="mt-3">Home Repair</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-windows/>
                    <h6 class="mt-3">Windows</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-painter/>
                    <h6 class="mt-3">Painter</h6>
                </div>
            </div>
            <div class="flex justify-evenly gap-3">
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-electrician/>
                    <h6 class="mt-3">Electrician</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-air_conditioning/>
                    <h6 class="mt-3">A / C</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-flooring/>
                    <h6 class="mt-3">Flooring</h6>
                </div>
            </div>
            <div class="flex justify-evenly gap-3">
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-plumber/>
                    <h6 class="mt-3">Plumber</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-carpenter/>
                    <h6 class="mt-3">Carpenter</h6>
                </div>
                <div
                    class="industry-picker rounded-xl border border-gray-200 p-4 flex flex-col justify-center items-center w-full cursor-pointer hover:border-primary hover:duration-500 hover:scale-110">
                    <x-icon-construction/>
                    <h6 class="mt-3">Construction</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20">
        <h2 class="text-center">Craftsmen grow faster with our app!</h2>
        <div class="mt-3 flex justify-center items-center gap-8">
            <div class="max-w-[240px] rounded-md overflow-hidden">
                <div class="bg-blue-500 text-white p-2">
                    <p class="text-center font-semibold">€ 1000 Additional Income</p>
                </div>
                <div>
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                </div>
                <div class="bg-gray-200 mt-1 p-3">
                    <p class="font-bold">Marcus Shmidt</p>
                    <div class="mt-2">
                        <span class="bg-blue-50 p-1 rounded text-blue-500 font-semibold">Heating</span>
                        <span class="bg-blue-50 p-1 rounded text-blue-500 font-semibold">Sanitary</span>
                        <span class="bg-blue-50 p-1 rounded text-blue-500 font-semibold">A/C</span>
                    </div>
                    <span
                        class="mt-4 flex items-center gap-2 w-fit p-2 rounded-xl border-2 border-gray-500 text-gray-500 font-semibold">
                        <x-icon-location/>
                        <p>Ingolstadt</p>
                    </span>
                </div>
            </div>
            <div class="max-w-[240px] rounded-md overflow-hidden">
                <div class="bg-blue-500 text-white p-2">
                    <p class="text-center font-semibold">€ 1000 Additional Income</p>
                </div>
                <div>
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                </div>
                <div class="bg-gray-200 mt-1 p-3">
                    <p class="font-bold">Marcus Shmidt</p>
                    <div class="mt-2">
                        <span class="bg-blue-50 p-1 rounded text-blue-500 font-semibold">Heating</span>
                        <span class="bg-blue-50 p-1 rounded text-blue-500 font-semibold">Sanitary</span>
                        <span class="bg-blue-50 p-1 rounded text-blue-500 font-semibold">A/C</span>
                    </div>
                    <span
                        class="mt-4 flex items-center gap-2 w-fit p-2 rounded-xl border-2 border-gray-500 text-gray-500 font-semibold">
                        <x-icon-location/>
                        <p>Ingolstadt</p>
                    </span>
                </div>
            </div>
        </div>
        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer m-auto mt-10 flex justify-center max-w-[333px] w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>

    <section class="mt-20">
        <h2 class="text-center">Instant messaging for effortless booking</h2>
        <div class="w-fit m-auto mt-7">
            <img src="{{ Vite::asset('resources/images/phone.png') }}" alt="">
        </div>
        <div class="flex flex-col gap-15 mt-10">
            <div class="text-center flex flex-col justify-center items-center">
                <x-icon-list-prim class="animate-pulse"/>
                <h4 class="mt-4 font-bold">Create your profile</h4>
                <p class="mt-2 text-gray-500">Create your profile, set your availability and present your services.</p>
            </div>
            <div class="text-center flex flex-col justify-center items-center">
                <x-icon-gallery-prim class="animate-pulse"/>
                <h4 class="mt-4 font-bold">Find jobs & be booked</h4>
                <p class="mt-2 text-gray-500">Browse available orders near you and contact potential customers.</p>
            </div>
            <div class="text-center flex flex-col justify-center items-center">
                <x-icon-puzzle-prim class="animate-pulse"/>
                <h4 class="mt-4 font-bold">Chat & Buchen</h4>
                <p class="mt-2 text-gray-500">Clarify details directly via our app and get secure bookings.</p>
            </div>
        </div>
    </section>

    <section class="mt-20">
        <h2 class="text-center">Neu beigetreten, bereit zu helfen!</h2>

        <div class="mt-10 flex justify-center gap-10">
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="w-fit rounded-full overflow-hidden max-w-[100px]">
                    <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
                </div>
                <p class="flex items-center gap-1">Peter Schmidt
                    <x-icon-verified/>
                </p>
                <small>Elektriker</small>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="w-fit rounded-full overflow-hidden max-w-[100px]">
                    <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
                </div>
                <p class="flex items-center gap-1">Hans Müller
                    <x-icon-verified/>
                </p>
                <small>Schlosser</small>
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="w-fit rounded-full overflow-hidden max-w-[100px]">
                    <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
                </div>
                <p class="flex items-center gap-1">Jan Sebastiant
                    <x-icon-verified/>
                </p>
                <small>Elektriker</small>
            </div>
        </div>

        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer m-auto mt-10 flex justify-center max-w-[500px] w-full py-2 text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-xl hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>

    <section class="mt-20 bg-orange-50 p-4 pb-10">
        <div class="relative w-fit m-auto text-center max-w-[550px]">
            <x-icon-quotes class="absolute z-0"/>
            <h2 class="relative z-10 pt-6">Real experiences, real success</h2>
            <p class="relative z-10 text-xl">Find out how craftsmen get more orders with our app, increase your income and
                expand your business .</p>
        </div>

        <div class="mt-10 flex flex-col justify-center items-center gap-10">
            <div class="rounded-xl bg-white-500 p-5 max-w-[500px]">
                <div class="flex items-center gap-4">
                    <div class="w-fit rounded-full overflow-hidden max-w-[70px]">
                        <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
                    </div>
                    <div>
                        <p class="font-bold">Maximilian Schneider</p>
                        <a href="#">
                            <small class="text-blue-300">Berlin</small>
                        </a>
                    </div>
                </div>

                <div class="mt-3 flex items-center gap-1">
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                </div>

                <p class="mt-3">Die App hat es einfach gemacht, einen Tischler zu finden. Er hat meinen Kleiderschrank und meinen Badezimmer-Schrank gebaut, und sie sehen fantastisch aus!</p>

                <div class=" mt-5 flex items-center gap-5">
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                </div>
            </div>
            <div class="rounded-xl bg-white-500 p-5 max-w-[500px]">
                <div class="flex items-center gap-4">
                    <div class="w-fit rounded-full overflow-hidden max-w-[70px]">
                        <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
                    </div>
                    <div>
                        <p class="font-bold">Maximilian Schneider</p>
                        <a href="#">
                            <small class="text-blue-300">Berlin</small>
                        </a>
                    </div>
                </div>

                <div class="mt-3 flex items-center gap-1">
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                </div>

                <p class="mt-3">Die App hat es einfach gemacht, einen Tischler zu finden. Er hat meinen Kleiderschrank und meinen Badezimmer-Schrank gebaut, und sie sehen fantastisch aus!</p>

                <div class=" mt-5 flex items-center gap-5">
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                </div>
            </div>
            <div class="rounded-xl bg-white-500 p-5 max-w-[500px]">
                <div class="flex items-center gap-4">
                    <div class="w-fit rounded-full overflow-hidden max-w-[70px]">
                        <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
                    </div>
                    <div>
                        <p class="font-bold">Maximilian Schneider</p>
                        <a href="#">
                            <small class="text-blue-300">Berlin</small>
                        </a>
                    </div>
                </div>

                <div class="mt-3 flex items-center gap-1">
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                    <x-icon-star/>
                </div>

                <p class="mt-3">Die App hat es einfach gemacht, einen Tischler zu finden. Er hat meinen Kleiderschrank und meinen Badezimmer-Schrank gebaut, und sie sehen fantastisch aus!</p>

                <div class=" mt-5 flex items-center gap-5">
                    <img class="w-[150px]" src="{{ Vite::asset('resources/images/plumber.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20">
        <div class="text-center relative w-fit m-auto">
            <h2 class="relative z-10 leading-[40px] font-bold">More customers.</h2>
            <h2 class="relative z-10 leading-[40px] font-bold">More orders.</h2>
            <h2 class="relative z-10 leading-[40px] font-bold">More sales.</h2>

            <x-icon-brushed class="absolute bottom-0 right-0 mb-2" />
        </div>

        <div class="m-auto mt-10 flex w-fit justify-center items-center">
            <div class="w-fit rounded-full overflow-hidden max-w-[80px] border border-white" style="margin-left: -15px;">
                <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
            </div>
            <div class="w-fit rounded-full overflow-hidden max-w-[80px] border border-white" style="margin-left: -15px;">
                <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
            </div>
            <div class="w-fit rounded-full overflow-hidden max-w-[80px] border border-white" style="margin-left: -15px;">
                <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
            </div>
            <div class="w-fit rounded-full overflow-hidden max-w-[80px] border border-white" style="margin-left: -15px;">
                <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
            </div>
            <div class="w-fit rounded-full overflow-hidden max-w-[80px] border border-white" style="margin-left: -15px;">
                <img src="{{ Vite::asset('resources/images/man.jpeg') }}" alt="">
            </div>
        </div>

        <p class="max-w-[330px] m-auto mt-10 text-center">Use the opportunity to make your services known, to receive more orders and to work flexibly. Register now
            and start directly!</p>

        <a href="{{ route('register') }}">
            <button
                class="cursor-pointer mt-10 flex justify-center max-w-[500px] w-full py-3 font-bold m-auto text-white transition duration-300 ease-in-out bg-orange-500 border border-orange-600 rounded-xl hover:bg-orange-600 focus:outline-none focus:border-orange-700 focus:shadow-outline active:bg-orange-700">
                Register now
            </button>
        </a>
    </section>
</x-layouts.guest>
