<div class="mx-auto max-w-4xl px-4 grid grid-cols-2 gap-4 mt-3">
    <div class="text-[32px] fs-20-768 font-medium col-span-2">Услуги <span class="text-green">iScor.ru</span></div>
    <a href="{{ route('credit-rating-physical-person') }}" class="block text-inherit no-underline">
        <div class="card-services">
            <img class="w-12 h-12" src="img/services-1.svg" alt="">
            <div class="text-2xl font-semibold mt-3">КРЕДИТНЫЙ РЕЙТИНГ ФИЗ.ЛИЦО</div>
            <div class="text-sm mt-3">Основные показатели кредитной истории. Для запроса необходимо Ф.И.О. серия, номер паспорта</div>
        </div>
    </a>
    <a href="{{ route('credit-rating-legal-entity') }}" class="block text-inherit no-underline">
        <div class="card-services">
            <img class="w-12 h-12" src="img/services-2.svg" alt="">
            <div class="text-2xl font-semibold mt-3">КРЕДИТНЫЙ РЕЙТИНГ ЮР.ЛИЦО</div>
            <div class="text-sm mt-3">Основные показатели кредитной истории. Для запроса необходим ИНН</div>
        </div>
    </a>
    <a href="{{ route('scoring') }}" class="block text-inherit no-underline">
        <div class="card-services">
            <img class="w-12 h-12" src="img/services-3.svg" alt="">
            <div class="text-2xl font-semibold mt-3">СКОРИНГОВЫЙ БАЛЛ</div>
            <div class="text-sm mt-3">Оценка кредиспособности и платежной дисциплины. Упрощенный сбор данных для запроса. Ф.И.О. и дата рождения.</div>
        </div>
    </a>
    <a href="{{ route('api-integration') }}" class="block text-inherit no-underline">
        <div class="card-services">
            <img class="w-12 h-12" src="img/services-5.svg" alt="">
            <div class="text-2xl font-semibold mt-3">API ИНТЕГРАЦИЯ</div>
            <div class="text-sm mt-3">Внедрение проверки кредитной истории непосредственно в вашу систему, с фокусированием на особо важных аспектах.</div>
        </div>
    </a>
</div>

