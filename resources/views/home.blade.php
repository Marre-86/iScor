<x-app-layout>
    <div class="container-iscor-2">
        <div class="fs-16-768 text-[24px] font-semibold font-medium-768 text-center mx-auto my-10">СЕРВИС ПРОВЕРКИ КОНТРАГЕНТОВ И СОТРУДНИКОВ ПО КРЕДИТНОЙ ИСТОРИИ</div>
        {{--        <button class="btn-transparent w-96 w-full-768 block mx-auto mt-5">Получить полный доступ</button>--}}
        <div class="banner font-medium text-white flex hidden-1024">
            <div class="banner-1 w-1/2">
                <div class="text-[32px] text-center">Проверка физического<br>или юридического лица</div>
                <div class="text-[20px]">
                    <div class="flex mt-10">
                        <div class="w-2/5 mr-2">Кредитный рейтинг</div>
                        <div class="w-3/5">от 60 ₽ (физ.лицо) 380₽ (юр.лицо)</div>
                    </div>
                    <div class="flex mt-5">
                        <div class="w-2/5 mr-2">Скоринговый балл</div>
                        <div class="w-3/5">от 30 ₽</div>
                    </div>
                </div>
                <div class="mt-10 flex justify-center">
                    <button class="btn-white w-2/3" onclick="location='{{ route('register') }}'">Заключить договор</button>
                </div>
            </div>
            <div class="banner-2 w-1/2 flex flex-col justify-between">
                <div class="text-[32px] text-center">Результат проверки в<br>течении 15-60 секунд</div>
                <div class="mt-10 flex justify-center">
                    <button class="btn-white w-2/3">Личный кабинет</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full font-medium text-white hidden block-1024">
        <div class="banner-mobile-1">
            <div class="text-[20px] text-center">Проверка физического или юридического лица</div>
            <div class="text-[14px]">
                <div class="mt-5">
                    <div>Кредитный рейтинг</div>
                    <div class="mt-1">от 60 ₽ (физ.лицо) 380₽ (юр.лицо)</div>
                </div>
                <div class="mt-5">
                    <div>Скоринговый балл</div>
                    <div class="mt-1">от 30 ₽</div>
                </div>
            </div>
            <button class="btn-white w-full mt-5">Заключить договор</button>
        </div>
        <div class="banner-mobile-2">
            <div class="text-[20px] text-center">Результат проверки в течении 15-60 секунд</div>
            <button class="btn-white w-full mt-5">Личный кабинет</button>
        </div>
    </div>
    <div class="container-iscor-2 pt-10">
        <div class="text-[32px] fs-20-768 font-medium">Услуги <span class="text-green">iScor.ru</span></div>
        @include('components/services-component')
    </div>
    <div class="bg-green text-white mt-20 py-10">
        <div class="container-iscor-2">
            <div class="text-[32px] fs-20-768 font-medium">iScor.ru – профессиональная система оценки рисков</div>
            <div class="flex block-768 flex-wrap flex-nowrap-768 justify-between justify-normal-768 mt-5">
                <div class="home-info mt-5">
                    <div class="frame">
                        <img class="w-24px-768" src="img/frame-1.svg" alt="">
                    </div>
                    <div class="text-[24px] fs-16-768 font-semibold mt-3">ДЛЯ HR-СПЕЦИАЛИСТОВ</div>
                    <div class="fs-14-768 mt-3">iScor.ru поможет сделать правильный выбор среди двух равноценных кандидатов. Взять на работу сотрудника, отвечающего политике безопасности компании..</div>
                </div>
                <div class="home-info mt-5">
                    <div class="frame">
                        <img class="w-24px-768" src="img/frame-1.svg" alt="">
                    </div>
                    <div class="text-[24px] fs-16-768 font-semibold mt-3">ДЛЯ СОТРУДНИКОВ СБ</div>
                    <div class="fs-14-768 mt-3">iScor.ru поможет предотвратить кражи ТМЦ, других ресурсов. Выявить и устранить потенциальную угрозу безопасности предприятия, недобросовестных дебиторов.</div>
                </div>
                <div class="home-info mt-5">
                    <div class="frame">
                        <img class="w-24px-768" src="img/frame-1.svg" alt="">
                    </div>
                    <div class="text-[24px] fs-16-768 font-semibold mt-3">ДЛЯ ВЛАДЕЛЬЦЕВ БИЗНЕСА</div>
                    <div class="fs-14-768 mt-3">iScor.ru позволит проверить кандидатов, сотрудников и контрагентов. Предотвратить финансовые потери, избежать репутационных рисков, работы с недобросовестными дебиторами.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-iscor-2">
        <div class="flex items-center justify-between mt-20">
            <div class="text-[32px] fs-20-768 font-medium font-semibold-768">Процесс работы</div>
            <button class="btn-transparent w-80 hidden-768">Получить полный доступ</button>
        </div>
    </div>
    <div class="relative pb-20">
        <div class="work-process-line-horizontal"></div>
        <div class="container-iscor-2">
            <div class="flex block-768 flex-wrap flex-nowrap-768 justify-between justify-normal-768">
                <div class="work-process mt-5">
                    <div class="work-process-circle-1">
                        <div class="work-process-circle-2"></div>
                    </div>
                    <div class="text-[14px] fs-12-768 text-gray mt-5">Этап 1</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Регистрация на платформе</div>
                    <div class="fs-14-768 mt-3">Для получения полного доступа к платформе необходимо пройти регистрацию. Оставьте заявку и наш менеджер свяжется с вами.</div>
                </div>
                <div class="work-process-line-vertical-768 mt-5"></div>
                <div class="work-process mt-5">
                    <div class="work-process-circle-1">
                        <div class="work-process-circle-2"></div>
                    </div>
                    <div class="text-[14px] fs-12-768 text-gray mt-5">Этап 2</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Заполнение договора</div>
                    <div class="fs-14-768 mt-3">Вы можете предоставить заполненный договор платформе в двух видах на выбор: Бумажный или Электронный</div>
                </div>
                <div class="work-process-line-vertical-768 mt-5"></div>
                <div class="work-process mt-5">
                    <div class="work-process-circle-1">
                        <div class="work-process-circle-2"></div>
                    </div>
                    <div class="text-[14px] fs-12-768 text-gray mt-5">Этап 3</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Оплата счета</div>
                    <div class="fs-14-768 mt-3">Оплатите счета с помощью расчетного счета или же банковской картой</div>
                </div>
            </div>
            <button class="btn-transparent w-80 w-full-768 mt-5 hidden block-768 mb-10">Получить полный доступ</button>
            <div class="flex items-center justify-between mt-20">
                <div class="text-[32px] fs-18-768 font-medium font-semibold-768">Кейсы</div>
                <button class="btn-arrow-green" onclick="location='{{ route('cases') }}'">Все кейсы</button>
            </div>
            @include('components/cases-component')
            <div class="flex items-center justify-between mt-20">
                <div class="text-[32px] fs-18-768 font-medium font-semibold-768">Тарифы</div>
                <button class="btn-arrow-green" onclick="location='{{ route('rates') }}'">Все тарифы</button>
            </div>
            @include('components/rates-component')
        </div>
    </div>
</x-app-layout>
