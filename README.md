### Описание
Самопис небольшой PHP фреймворк. Работает намного быстрее laravel, symphony и yii

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
require "./vendor/server.php";

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
  - Создание middleware для эндпоинта
    ```php
      Route::get("/", function () {
          // code...
      })->middleware([TestMiddleware::class, "название метода"]);
      // ИЛИ 
      Route::get("/", function () {
        //code...
      })->middleware(function () {
        // логика...
        return true;
      })
    
      // TestMiddleware.php (http/Middlewares создавать в этом неймспейсе и директории):
      class TestMiddleware extends Middleware // обязательно наследование
        {
                public function test(): true|false
                {
                    // логика...
                    return true;
                } 
        }
  
    ```
- Генерация страници и бандла для текущей страници
  ```php
  Route::get("/", function () {
 	    generatePage("start");
  });
  ```
- Везде доступна константа REQUEST, обьект http\Request
- Новую можно также обьявить самому
  ```php 
  $request = new Request;
  ```
- получить Content-type файла
  ```php
  getFileContentType("file.js");
  ```
- Установить Content-type в заголовок ответа 
  ```php
  responseContentType(".js");
  ```
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
  // $data - информация в ответ
  // $status - статус ответа
  responseJson($data, $status)
  ```

