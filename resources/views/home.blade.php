<x-app-layout>
    <div class="container-iscor-2">
        <div class="fs-24-768 text-[64px] font-medium text-center mx-auto mt-5">СЕРВИС ПРОВЕРКИ КОНТРАГЕНТОВ И СОТРУДНИКОВ ПО КРЕДИТНОЙ ИСТОРИИ</div>
        {{--        <button class="btn-transparent w-96 w-full-768 block mx-auto mt-5">Получить полный доступ</button>--}}
        <div class="banner font-medium text-white flex my-10 hidden-1024">
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
    <div class="w-full font-medium text-white my-5 hidden block-1024">
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
    <div class="container-iscor-2">
        <div class="text-[32px] fs-20-768 font-medium">Услуги <span class="text-green">iScor.ru</span></div>
        <div class="flex flex-wrap flex-nowrap-768 justify-between justify-normal-768 overflow-x-auto-768 no-scrollbar mt-3">
            <div class="card-home-services cursor-pointer mt-3" onclick="location='{{ route('credit-rating-physical-person') }}'">
                <img class="w-12 h-12" src="img/services-1.svg" alt="">
                <div class="text-2xl font-semibold mt-3">КРЕДИТНЫЙ РЕЙТИНГ ФИЗ.ЛИЦО</div>
                <div class="text-sm mt-3">Основные показатели кредитной истории. Для запроса необходимо Ф.И.О. серия, номер паспорта</div>
            </div>
            <div class="card-home-services cursor-pointer mt-3" onclick="location='{{ route('credit-rating-legal-entity') }}'">
                <img class="w-12 h-12" src="img/services-2.svg" alt="">
                <div class="text-2xl font-semibold mt-3">КРЕДИТНЫЙ РЕЙТИНГ ЮР.ЛИЦО</div>
                <div class="text-sm mt-3">Основные показатели кредитной истории. Для запроса необходим ИНН</div>
            </div>
            <div class="card-home-services cursor-pointer mt-3" onclick="location='{{ route('scoring') }}'">
                <img class="w-12 h-12" src="img/services-3.svg" alt="">
                <div class="text-2xl font-semibold mt-3">СКОРИНГОВЫЙ БАЛЛ</div>
                <div class="text-sm mt-3">Оценка кредиспособности и платежной дисциплины. Упрощенный сбор данных для запроса. Ф.И.О. и дата рождения.</div>
            </div>
            <div class="card-home-services cursor-pointer mt-3" onclick="location='{{ route('api-integration') }}'">
                <img class="w-12 h-12" src="img/services-5.svg" alt="">
                <div class="text-2xl font-semibold mt-3">API ИНТЕГРАЦИЯ</div>
                <div class="text-sm mt-3">Внедрение проверки кредитной истории непосредственно в вашу систему, с фокусированием на особо важных аспектах.</div>
            </div>
        </div>
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
            <div class="flex flex-wrap flex-nowrap-768 justify-between justify-normal-768 overflow-x-auto-768 no-scrollbar mt-3">
                <div class="card-home-cases mt-3">
                    <div class="text-[14px] fs-12-768 text-gray">03.07.2024</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Проверка кредитного отчета перед предоставлением</div>
                    <div class="fs-14-768 mt-3">Строительная компания Быстрострой (название изменено) работала с компанией Икс на условиях предоплаты. Под очередной заказ Икс попросил предоставить отсрочку. С одной стороны,...</div>
                    <button class="btn-arrow-green mt-3" onclick="location='{{ route('case') }}'">Читать кейс</button>
                </div>
                <div class="card-home-cases mt-3">
                    <div class="text-[14px] fs-12-768 text-gray">03.07.2024</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Проверка кредитного отчета перед предоставлением</div>
                    <div class="fs-14-768 mt-3">Строительная компания Быстрострой (название изменено) работала с компанией Икс на условиях предоплаты. Под очередной заказ Икс попросил предоставить отсрочку. С одной стороны,...</div>
                    <button class="btn-arrow-green mt-3" onclick="location='{{ route('case') }}'">Читать кейс</button>
                </div>
                <div class="card-home-cases mt-3">
                    <div class="text-[14px] fs-12-768 text-gray">03.07.2024</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Проверка кредитного отчета перед предоставлением</div>
                    <div class="fs-14-768 mt-3">Строительная компания Быстрострой (название изменено) работала с компанией Икс на условиях предоплаты. Под очередной заказ Икс попросил предоставить отсрочку. С одной стороны,...</div>
                    <button class="btn-arrow-green mt-3" onclick="location='{{ route('case') }}'">Читать кейс</button>
                </div>
                <div class="card-home-cases mt-3">
                    <div class="text-[14px] fs-12-768 text-gray">03.07.2024</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Проверка кредитного отчета перед предоставлением</div>
                    <div class="fs-14-768 mt-3">Строительная компания Быстрострой (название изменено) работала с компанией Икс на условиях предоплаты. Под очередной заказ Икс попросил предоставить отсрочку. С одной стороны,...</div>
                    <button class="btn-arrow-green mt-3" onclick="location='{{ route('case') }}'">Читать кейс</button>
                </div>
                <div class="card-home-cases mt-3">
                    <div class="text-[14px] fs-12-768 text-gray">03.07.2024</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Проверка кредитного отчета перед предоставлением</div>
                    <div class="fs-14-768 mt-3">Строительная компания Быстрострой (название изменено) работала с компанией Икс на условиях предоплаты. Под очередной заказ Икс попросил предоставить отсрочку. С одной стороны,...</div>
                    <button class="btn-arrow-green mt-3" onclick="location='{{ route('case') }}'">Читать кейс</button>
                </div>
                <div class="card-home-cases mt-3">
                    <div class="text-[14px] fs-12-768 text-gray">03.07.2024</div>
                    <div class="text-[24px] fs-16-768 font-semibold">Проверка кредитного отчета перед предоставлением</div>
                    <div class="fs-14-768 mt-3">Строительная компания Быстрострой (название изменено) работала с компанией Икс на условиях предоплаты. Под очередной заказ Икс попросил предоставить отсрочку. С одной стороны,...</div>
                    <button class="btn-arrow-green mt-3" onclick="location='{{ route('case') }}'">Читать кейс</button>
                </div>
            </div>
            <div class="flex items-center justify-between mt-20">
                <div class="text-[32px] fs-18-768 font-medium font-semibold-768">Тарифы</div>
                <button class="btn-arrow-green" onclick="location='{{ route('rates') }}'">Все тарифы</button>
            </div>
            <div class="flex flex-wrap flex-nowrap-768 justify-between justify-normal-768 overflow-x-auto-768 no-scrollbar mt-3">
                <div class="card-home-rates mt-3">
                    <img class="w-24px-768 ml-auto" src="img/rates-1.svg" alt="">
                    <div class="text-[24px] fs-16-768 font-semibold">Базовый</div>
                    <div class="text-[24px] fs-20-768 font-medium font-semibold-768">52 000 ₽/год</div>
                    <div class="fs-12-768 text-gray border-bottom mt-3 pb-5">100 скорингов физ.лицо<br>
                        150 кредитных рейтингов физ.лицо<br>
                        95 кредитных отчетов юр.лицо</div>
                    <div class="fs-14-768 font-semibold mt-5">Включено:</div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Скоринговый балл 100р/шт</div>
                    </div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Кредитный рейтинг 150р/шт</div>
                    </div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Кредитный отчет юр. лица 550р/шт</div>
                    </div>
                    <a href="{{ route('register') }}">
                        <button class="btn-transparent w-full mt-5">Купить</button>
                    </a>
                </div>
                <div class="card-home-rates mt-3">
                    <img class="w-24px-768 ml-auto" src="img/rates-1.svg" alt="">
                    <div class="text-[24px] fs-16-768 font-semibold">Комфортный</div>
                    <div class="text-[24px] fs-20-768 font-medium font-semibold-768">174 000 ₽/год</div>
                    <div class="fs-12-768 text-gray border-bottom mt-3 pb-5">2 485 скорингов физ.лицо<br>
                        1 1935 кредитных рейтингов физ.лицо<br>
                        370 кредитных отчетов юр.лицо</div>
                    <div class="fs-14-768 font-semibold mt-5">Включено:</div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Скоринговый балл 70р/шт</div>
                    </div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Кредитный рейтинг 90р/шт</div>
                    </div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Кредитный отчет юр. лица 470р/шт</div>
                    </div>
                    <a href="{{ route('register') }}">
                        <button class="btn-transparent w-full mt-5">Купить</button>
                    </a>
                </div>
                <div class="card-home-rates mt-3">
                    <img class="w-24px-768 ml-auto" src="img/rates-1.svg" alt="">
                    <div class="text-[24px] fs-16-768 font-semibold">Выгодный</div>
                    <div class="text-[24px] fs-20-768 font-medium font-semibold-768">338 000 ₽/год</div>
                    <div class="fs-12-768 text-gray border-bottom mt-3 pb-5">8 450 скорингов физ.лицо<br>
                        4 830 кредитных рейтингов физ.лицо<br>
                        805 кредитных отчетов юр.лицо</div>
                    <div class="fs-14-768 font-semibold mt-5">Включено:</div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Скоринговый балл 40р/шт</div>
                    </div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Кредитный рейтинг 70р/шт</div>
                    </div>
                    <div class="fs-14-768 font-semibold flex items-start mt-3">
                        <img class="w-16px-768 mt-1 mr-2" src="img/done.svg" alt="">
                        <div>Кредитный отчет юр. лица 420р/шт</div>
                    </div>
                    <a href="{{ route('register') }}">
                        <button class="btn-transparent w-full mt-5">Купить</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
