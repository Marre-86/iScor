## О проект

Написано на Laravel 11. Минимальная версия PHP - 8.2.

Установить зависимости:
```
composer install
```
Создать файл .env, скопировав его из стандартного .env.example.

Внести в файл .env валидные значения настроек соединения с базой данных. Можно оставить как есть (sqlite), но тогда придется создать файл базы данных sqlite вручную: database/database.sqlite.

Сгенерировать ключ приложения:

```
php artisan key:generate
```

Прогнать миграции:
```
php artisan migrate
```
Если нужен админский аккаунт, то установить в .env ключи ADMIN_NAME, ADMIN_EMAIL и ADMIN_PASSWORD и прогнать сидеры:
```
php artisan db:seed
```

Создастся юзер с ролью "Админ", станет возможно зайти под ним.

Если нужны оповещения в телеграм-канал, то установить в .env ключи TELEGRAM_BOT_TOKEN и TELEGRAM_CHAT_ID.

Запустить:
1) в первом окне
```
php artisan serve
```
2) во втором окне
```
npm run dev
```

Если мы хотим заглушить функционал регистраций пока, то в **resources/views/layouts/header.blade.php** нужно закомментировать строчки с 20 по 46:
```
@auth
...
@endauth
```
