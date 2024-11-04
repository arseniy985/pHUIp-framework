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
  newRout("/", function () {
		// code...
  });
  ```
- Генерация страници и бандла для текущей страници
 
  ```php
  newRout("/", function () {
 	generatePage("start");
  });
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

