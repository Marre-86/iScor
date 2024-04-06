<div class="bg-gray py-5 sm:py-10">
    <div class="container-iscor flex block-768 justify-between">
        <div class="hidden block-768 mb-5">
            <div class="font-semibold">Получите полный доступ</div>
            <div class="text-[14px] mt-3">Для получения полного доступа к платформе необходимо пройти регистрация. Оставьте заявку и наш менеджер свяжется с вами.</div>
            <button class="btn-green w-full mt-5">Регистрация</button>
        </div>
        <div class="w-45 w-full-768">
            <nav class="text-[14px] flex justify-between">
                <a href="{{ route('login') }}">Главная</a>
                <a href="{{ route('services') }}">Услуги</a>
                <a href="{{ route('rates') }}">Тарифы</a>
                <a href="{{ route('articles') }}">Статьи</a>
                <a href="{{ route('cases') }}">Кейсы</a>
            </nav>
            <div class="flex mt-5">
                <img class="me-10" src="img/logo-facebook.svg" alt="logo-facebook">
                <img class="me-10" src="img/logo-twitter.svg" alt="logo-twitter">
                <img src="img/logo-instagram.svg" alt="logo-instagram">
            </div>
        </div>
        <div class="w-45 hidden-768">
            <div class="flex">
                <div class="w-1/2 me-3">
                    <div class="font-semibold">Получите полный доступ</div>
                    <div class="text-[14px] mt-3">Для получения полного доступа к платформе необходимо пройти регистрация. Оставьте заявку и наш менеджер свяжется с вами.</div>
                </div>
                <div class="w-1/2"><button class="btn-green w-full">Регистрация</button></div>
            </div>
            <div class="text-[14px] text-gray flex flex-wrap items-center mt-5">
                <a class="mt-3 me-10" href="">Политика конфиденциальности</a>
                <a class="mt-3 me-10" href="">Политика push-уведомлений</a>
                <div class="mt-3 me-10">© 2015-2023</div>
                <img class="mt-3" src="img/arrow-top.svg" alt="">
            </div>
        </div>
        <div class="text-[14px] text-gray text-center mt-5 hidden block-768">
            <a class="block mt-5" href="">Политика конфиденциальности</a>
            <a class="block mt-5" href="">Политика push-уведомлений</a>
            <div class="flex items-center justify-between mt-5">
                <div></div>
                <div>© 2015-2023</div>
                <img class="float-right" src="img/arrow-top.svg" alt="">
            </div>
        </div>
    </div>
</div>