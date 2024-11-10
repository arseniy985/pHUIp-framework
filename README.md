### Описание
Самопис небольшой PHP фреймворк. Работает намного быстрее laravel, symphony и yii

### Установка
```shell
$ composer install
```

### Настройка .htaccess для того чтобы все запросы ишли на один пхп файл
``` .htaccess
<IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteBase /

	RewriteRule ^.*$ index.php [L]
	#		  Запрос юзера | Файл в которм прописано что открыват
</IfModule>
```
### `index.php` на который будут идти все запросы
```php
require './vendor/autoload.php';
require "./vendor/server.php";

// подключения доп библиотек, контейнера  и орм

startServer();
```

### Функции для router.php

- Создание нового эндпоинта
  ```php
  Route::get("/", function () {
		// code...
  });
  ИЛИ
  Route::get(
    "/",  
    [
        MainController::class, /* неймспейс класса контроллера, полученный с помощью ::class */
        "метод класса контроллера"
    ]
  )
  // тоже самое с остальными методами запроса (GET, POST и тд)
  ```
  - Создание middleware для эндпоинта. Обязательно содержит метод handle, в котором есть вся логика
  ```php
  Route::get("/", function () {
      // code...
  })->middleware([TestMiddleware::class, "название метода"]);
  
  ИЛИ 
  
  Route::get("/", function () {
    //code...
  })->middleware(function () {
    // логика...
    return true;
  })

  // TestMiddleware.php (http/Middlewares создавать в этом неймспейсе и директории):
  class TestMiddleware extends Middleware // обязательно наследование
    {
            public function handle(): true|false
            {
                // логика...
                return true;
            } 
    }
## Контроллеры
- Контроллеры создаются в http/Controllers имеют соответствующий неймспейс 
  ```php
  namespace http\Controllers;

  use http\Request;
  
  class MainController 
  {
      public function generateTestPage(): void
      {
          generatePage('start');
      }

      public function testInjection(Request $request): void
      {
          responseHtml(print_r($request, true), 200);
      }
  }
  ```
## Внедрение завиисимостей (любых обьектов)
- Зависимости определяются в index.php 
- При введении новой библиотеки необходимо зарегистрировать ее, дальше можно принимать ее обьект в аргументах
  ```php
    $injector->alias(Request::class, Request::class);
  // $injector->alias(КлассЗависимости::class, АлиасКлассаЗависимости(можно тот же класс)::class);
  ```
  Теперь вы можете указать в аргументах метода миддлвейра или контроллера данный обьект и он будет туда передан:
  ```php
    public function testInjection(Request $request): void
    {
        responseHtml(print_r($request, true), 200);
    } // Контейнер зависимости сам создал и передал обьект в $request
  ```
## Генерация страницы
- Все происходит с помощью функции generatePage("название страницы", ['названиеПеременной' => Содержание])  
  Второй аргумент необязателен. Переданный массив разбивается на переменные и передается в страницу, переменные всегда можно вызвать, например <?php echo users[0] ? >
  ```php
  Route::get("/", function () {
 	    generatePage(
            "start",
            ['users' => ['user1', 'user2']]
        );
  });
  ```
- Структура файлов при этом такая:
  ```
  └── resources
    └── pages
       └── [start]
         └── css
           └── page.css
         └── js
            └── page.js
       └── page.php
  ```
- Шаблон страницы находится в router/Page.php

## ORM (работа с базой данных)
- Здесь встроена orm от laravel - Eloquent. Имеет точно такие же методы.
- При этом миграции делаются сами.
- Перед началом работы необходимо заполнить .env:
  ```dotenv
  DB_DRIVER=mysql
  DB_HOST=localhost
  DB_NAME=frameworktest
  DB_USER=root
  DB_PASSWORD=root
  ```
- Модели создаются в database/model и обязательно наследуются от use Illuminate\Database\Eloquent\Model.
  ```php
  namespace Database\Models;

  use Illuminate\Database\Eloquent\Model;

  class Post extends Model
  {
    // таблица привязанная к этой модели
    protected $table = 'posts';

    protected $fillable = ['title', 'content'];
  }
  ```
- Использование этих моделей делается в соответствии с документацией Eloquent  https://laravel.com/docs/11.x/eloquent
- В каждую запись вставляются created_at и updated_at формата datetime.
  ```sql
  CREATE TABLE posts (
    id int unsigned auto_increment primary key ,
    title varchar(300) not null,
    content varchar(1500) not null,
    updated_at datetime not null,
    created_at datetime not null
  )
  ```
- В случае если хотите их отключить можно указать  
  ```php
  class Post extends Model
  {
    protected $table = 'posts';

    protected $fillable = ['title', 'content'];

    // указываем тут
    public $timestamps = false;
  }
  ```
## Ответы
- Ответ 404 
  ```php
  response404()
  ```
- Ответ 500
  ```php
  response500()
  ```
- Ответ json
  ```php 
  // $data - информация в ответ, будет превращена в json
  // $status - статус ответа
  responseJson($data, $status)
  ```
- Ответ html
  ```php
  // $data - информация в ответ
  // $status - статус ответа
  responseHtml($data, $status)
  ```
## Функции - помошники
- Замер времени выполнения кода
  ```php
  $time = debugTime(function () {
    //любой код
  });
  //возвращает microtime выполнения кода
  ```
- Получение переменной из .env 
  ```php
  config($ключ);
  ```