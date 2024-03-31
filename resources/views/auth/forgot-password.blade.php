<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="text-[24px] fs-16-768 font-semibold text-green">Восстановить пароль</div>
        <div class="mt-5">
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <button class="btn-grey w-full mt-10">Восстановить</button>
        <a class="a-green text-center block mt-5 hover:underline" href="{{ route('login') }}">Вспомнили пароль? Войти</a>
        <a class="a-green text-center block mt-3 hover:underline" href="{{ route('register') }}">Еще не зарегистрировались?</a>
    </form>
</x-guest-layout>
