#  тестовое заданеие от ООО «АТОН»
***
Задача для стажера Fullstack-разработчика от ООО «АТОН»  
  
проект сделан на laravel
  
порядок установки  
1. скачать проект с гита
2. ввести к командную строку "composer install"
3. ввести "npm install & nmp run dev"
4. создать базу данных и ввести ее название и данные для входа в .env
5. сделать миграцию в БД и заполнить ее данными из faker, введя в командной строке "php artisan migrate --seed"
6. запустить сервер laravel "php artisan serve"


***
сделано на laravel  
для авторизации использован breeze модифицированный.  
для заполнения данных в БД faker - создал 10 пользователей с fio 111 111 111, 222 222 222 и т.д.  
логины 111, 222 и т.д. пароль у каждого 12345   
  
создается 10 пользователей, 20 клинетов, а еще таблица со статусами клинетов
