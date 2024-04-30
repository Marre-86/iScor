<div class="flex flex-wrap justify-between mt-3">
    <div class="card-services cursor-pointer mt-3" onclick="location='{{ route('credit-rating-physical-person') }}'">
        <img class="w-12 h-12" src="img/services-1.svg" alt="">
        <div class="fs-16-768 text-[24px] font-semibold mt-3">КРЕДИТНЫЙ РЕЙТИНГ ФИЗ.ЛИЦО</div>
        <div class="fs-14-768 mt-3">Основные показатели кредитной истории. Для запроса необходимо Ф.И.О. серия, номер паспорта</div>
    </div>
    <div class="card-services cursor-pointer mt-3" onclick="location='{{ route('credit-rating-legal-entity') }}'">
        <img class="w-12 h-12" src="img/services-2.svg" alt="">
        <div class="fs-16-768 text-[24px] font-semibold mt-3">КРЕДИТНЫЙ РЕЙТИНГ ЮР.ЛИЦО</div>
        <div class="fs-14-768 mt-3">Основные показатели кредитной истории. Для запроса необходим ИНН</div>
    </div>
    <div class="card-services cursor-pointer mt-3" onclick="location='{{ route('scoring') }}'">
        <img class="w-12 h-12" src="img/services-3.svg" alt="">
        <div class="fs-16-768 text-[24px] font-semibold mt-3">СКОРИНГОВЫЙ БАЛЛ</div>
        <div class="fs-14-768 mt-3">Оценка кредиспособности и платежной дисциплины. Упрощенный сбор данных для запроса. Ф.И.О. и дата рождения.</div>
    </div>
    <div class="card-services cursor-pointer mt-3" onclick="location='{{ route('api-integration') }}'">
        <img class="w-12 h-12" src="img/services-5.svg" alt="">
        <div class="fs-16-768 text-[24px] font-semibold mt-3">API ИНТЕГРАЦИЯ</div>
        <div class="fs-14-768 mt-3">Внедрение проверки кредитной истории непосредственно в вашу систему, с фокусированием на особо важных аспектах.</div>
    </div>
</div>