<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="text-[24px] fs-16-768 font-semibold text-green">Зарегистрироваться</div>
        <div class="fs-14-768 mt-5">Оставьте заявку на подключение и получите все инструменты для проверки физических и юридических лиц онлайн. Мы свяжемся с вами в ближайшее время!</div>
        <div class="mt-5">
            <x-text-input id="company_name" class="input" type="text" name="company_name" :value="old('company_name')" required autofocus autocomplete="company_name" placeholder="Название компании" />
            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
        </div>
        <div class="mt-5">
            <x-text-input id="inn" class="input" type="number" name="inn" :value="old('inn')" autofocus autocomplete="inn" placeholder="ИНН" />
            <x-input-error :messages="$errors->get('inn')" class="mt-2" />
        </div>
        <div class="mt-5">
            <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="ФИО" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-5">
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-5">
            <x-text-input id="phone" class="input" type="text" name="phone" :value="old('phone')" autocomplete="phone" placeholder="Номер телефона" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
         <div class="mt-5">
            <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" placeholder="Пароль" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mt-5">
            <x-text-input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Подтвердите пароль" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex mt-10">
            <input class="hidden checkbox" id="checkbox" type="checkbox">
            <label class="flex cursor-pointer" for="checkbox">
                <div class="mt-1 mr-2"></div>
                <span class="text-[14px] select-none">Нажимая на кнопку «Зарегистрироваться», вы даёте согласие на обработку <a class="a-green" href="">персональных данных</a></span>
            </label>
        </div>
        <button class="btn-gray w-full mt-10">Зарегистрироваться</button>
        <a class="a-green text-center block mt-5 hover:underline" href="{{ route('login') }}">У вас уже есть аккаунт?</a>
    </form>
</x-guest-layout>
