<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-[24px] fs-16-768 font-semibold text-green">Войти</div>
        <div class="fs-14-768 mt-5">Клиентский отдел IScor.ru всегда готов помочь и ответить на любой вопрос</div>
        <div class="mt-5">
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-5">
            <x-text-input id="password" class="input" type="password" name="password" required autocomplete="current-password" placeholder="Пароль" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="flex justify-between">
            <div class="flex mt-3">
                <input class="hidden checkbox" id="remember_me" type="checkbox" name="remember">
                <label class="flex cursor-pointer" for="remember_me">
                    <div class="mr-2"></div>
                    <span class="text-[14px] select-none">Запомнить меня</span>
                </label>
            </div>
            <a class="text-[14px] a-grey mt-3 hover:underline" href="{{ route('password.request') }}">Забыли пароль?</a>
        </div>
        <button class="btn-grey w-full mt-10">Войти</button>
        <a class="a-green text-center block mt-5 hover:underline" href="{{ route('register') }}">Еще не зарегистрировались?</a>
    </form>
</x-guest-layout>