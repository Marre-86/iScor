<div class="bg-white">
    <div class="container-iscor">
        <div class="flex items-center justify-between py-5">
            <div class="flex items-center">
                <img class="logo cursor-pointer" src="img/logo.svg" onclick="location='{{ route('home') }}'">
                <nav class="text-[14px] font-medium ml-20 hidden-768">
                    <a class="{{ request()->routeIs('home') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('home') }}">Главная</a>
                    <a class="{{ request()->routeIs('services') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('services') }}">Услуги</a>
                    <a class="{{ request()->routeIs('rates') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('rates') }}">Тарифы</a>
                    <a class="{{ request()->routeIs('articles') ? 'text-green' : 'text-gray' }} mr-5 hover:text-green-600" href="{{ route('articles') }}">Статьи</a>
                    <a class="{{ request()->routeIs('cases') ? 'text-green' : 'text-gray' }} hover:text-green-600" href="{{ route('cases') }}">Кейсы</a>
                </nav>
            </div>
            {{-- <div class="flex items-center">
                <div class="text-right mr-5">
                    <div class="text-[20px] font-semibold">+7(423) 124 311 213</div>
                    <a class="text-[14px] font-semibold a-green" href="">Заказать звонок</a>
                </div>
                <button class="btn-green-sm">Войти</button>
            </div> --}}
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
            <div class="hidden block-768">
                <button @click="open = ! open" class="py-2">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden">
        <div class="text-[14px]">
            <a class="{{ request()->routeIs('home') ? 'text-green' : 'text-gray' }} block border p-5" href="{{ route('home') }}">Главная</a>
            <a class="{{ request()->routeIs('services') ? 'text-green' : 'text-gray' }} block border p-5" href="{{ route('services') }}">Услуги</a>
            <a class="{{ request()->routeIs('rates') ? 'text-green' : 'text-gray' }} block border p-5" href="{{ route('rates') }}">Тарифы</a>
            <a class="{{ request()->routeIs('articles') ? 'text-green' : 'text-gray' }} block border p-5" href="{{ route('articles') }}">Статьи</a>
            <a class="{{ request()->routeIs('cases') ? 'text-green' : 'text-gray' }} block border p-5" href="{{ route('cases') }}">Кейсы</a>
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <x-responsive-nav-link class="mt-3" :href="route('profile.edit')">Профиль</x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</x-responsive-nav-link>
            </form>
        </div>
    </div>
</div>