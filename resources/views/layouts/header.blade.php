<div x-data="{ open: false }" class="bg-white">
    <div class="container-iscor">
        <div class="flex items-center justify-between py-5">
            <div class="flex items-center">
                <img class="logo cursor-pointer" src="img/logo.svg" onclick="location='{{ route('home') }}'">
                <nav class="text-[14px] font-medium ml-20 hidden-1024">
                    <a class="{{ request()->routeIs('home') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('home') }}">Главная</a>
                    <a class="{{ request()->routeIs('services') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('services') }}">Услуги</a>
                    <a class="{{ request()->routeIs('rates') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('rates') }}">Тарифы</a>
                    <a class="{{ request()->routeIs('articles') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('articles') }}">Статьи</a>
                    <a class="{{ request()->routeIs('cases') ? 'text-green' : 'text-gray' }} hover:text-green-600" href="{{ route('cases') }}">Кейсы</a>
                    @hasrole('Admin')
                        <a class="{{ request()->routeIs('applications.index') ? 'text-admin-selected' : 'text-admin' }} hover:text-purple-600 ms-20" href="{{ route('applications.index') }}">Заявки</a>
                    @endhasrole
                </nav>
            </div>
            <div class="flex items-center hidden-1024">


                @auth
                    <div class="hidden-768">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="text-[14px] flex items-center font-medium text-gray hover:text-gray-700">
                                    <div>{{ Auth::user()->name }}</div>
                                    <svg class="fill-current h-4 w-4 ms-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">Профиль</x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <div class="text-right mr-5">
                        <div class="text-[20px] font-semibold">+7(423) 124 311 213</div>
                        <a class="text-[14px] font-semibold a-green" href="#" onclick="openModal()">Заказать звонок</a>
                    </div>
                    <button class="btn-green w-52" onclick="location='{{ route('login') }}'">Войти</button>
                @endauth

            </div>
            <div class="modal-bg" onclick="closeModal()">
                <div class="modal" onclick="event.stopPropagation();">
                    <div class="flex items-center justify-between hidden-1024">
                        <div class="text-[24px] fs-16-768 font-semibold text-green">Заказать звонок</div>
                        <img class="cursor-pointer" src="img/close-modal.svg" onclick="closeModal()">
                    </div>
                    <img class="ml-auto hidden block-1024" src="img/close-modal-green.svg" onclick="closeModal()">
                    <div class="fs-14-768 mt-5">Клиентский отдел IScor.ru всегда готов помочь и ответить на любой вопрос</div>
                    <div class="mt-5">
                        <x-text-input id="name" class="input" type="name" name="name" required autocomplete="name" placeholder="Имя" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mt-5">
                        <x-text-input id="number" class="input" type="number" name="number" required autocomplete="number" placeholder="+7 (___)___-___-___" />
                        <x-input-error :messages="$errors->get('number')" class="mt-2" />
                    </div>
                    <div class="mt-5">
                        <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Почта" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <button class="btn-green w-full mt-10">Заказать звонок</button>
                </div>
            </div>
            <script>
                const modal = document.querySelector(".modal-bg");
                const openModal = () => modal.style.display = "block";
                const closeModal = () => modal.style.display = "none";
            </script>
            <div class="hidden block-1024">
                <button @click="open = ! open" class="py-2">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden pb-5">
        <a class="{{ request()->routeIs('home') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('home') }}">Главная</a>
        <a class="{{ request()->routeIs('services') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('services') }}">Услуги</a>
        <a class="{{ request()->routeIs('rates') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('rates') }}">Тарифы</a>
        <a class="{{ request()->routeIs('articles') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('articles') }}">Статьи</a>
        <a class="{{ request()->routeIs('cases') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('cases') }}">Кейсы</a>
        <a class="{{ request()->routeIs('login') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('login') }}">Войти</a>
        {{-- <a class="{{ request()->routeIs('profile') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('profile.edit') }}">Профиль</a>
        <a class="{{ request()->routeIs('logout') ? 'text-green' : 'text-gray' }} text-[14px] block border p-5" href="{{ route('logout') }}">Выйти</a> --}}
        <div class="text-[20px] font-semibold pt-5 pl-5">+7(423) 124 311 213</div>
        <a class="a-green text-[14px] font-semibold pt-3 mb-5 pl-5" href="#" onclick="openModal()">Заказать звонок</a>
    </div>
</div>
