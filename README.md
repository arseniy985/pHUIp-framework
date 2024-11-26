# pHUIp Framework

Легкий и быстрый PHP фреймворк с современной архитектурой и простым API. Разработан для создания эффективных веб-приложений с минимальными накладными расходами.

## Особенности

- **Высокая производительность**: Оптимизированная маршрутизация и обработка запросов
- **Dependency Injection**: Встроенный контейнер внедрения зависимостей
- **Шаблонизация**: Безопасный и эффективный движок шаблонов
- **ORM**: Интеграция с Eloquent ORM от Laravel
- **Middleware**: Гибкая система промежуточного ПО
- **Простота использования**: Интуитивно понятный API и минимальная конфигурация

## Требования

- PHP 8.0 или выше
- Composer
- MySQL (для работы с базой данных)
- Apache с mod_rewrite (или nginx с аналогичной конфигурацией)

## Установка

```bash
# Через Composer
composer require arseniy985/phuip

# Или клонирование репозитория
git clone https://github.com/arseniy985/pHUIp-framework/
```

## Быстрый старт

1. Настройте `.htaccess`:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    RewriteRule ^.*$ index.php [L]
</IfModule>
```

2. Создайте `.env` файл:
```env
DB_DRIVER=mysql
DB_HOST=localhost
DB_NAME=your_database
DB_USER=your_username
DB_PASSWORD=your_password
```

3. Создайте базовый маршрут в `router/router.php`:
```php
Route::get("/", function () {
    PageGenerator::render("home", ["title" => "Welcome!"]);
});
```

## Архитектура

### Маршрутизация

Поддерживаются все основные HTTP методы:

```php
// Функция-обработчик
Route::get("/", function () {
    // ...
});

// Контроллер и метод
Route::post("/users", [UserController::class, "create"]);

// С middleware
Route::get("/admin", [AdminController::class, "dashboard"])
    ->middleware(AuthMiddleware::class);
```

### Контроллеры

Контроллеры размещаются в `http/Controllers`:

```php
namespace http\Controllers;

class UserController 
{
    public function show(Request $request, int $id): void
    {
        $user = User::find($id);
        PageGenerator::render('user', ['user' => $user]);
    }
}
```

### Шаблонизация

Система шаблонов поддерживает:

- Переменные: `{{ $variable }}`
- Функции: `{{ strtoupper($name) }}`
- Безопасный вывод HTML
- Кэширование шаблонов

Структура шаблонов:
```
resources/
└── pages/
    └── [page_name]/
        ├── css/
        │   └── page.css
        ├── js/
        │   └── page.js
        └── page.php
```

### Middleware

Middleware может быть определено как класс или замыкание:

```php
// Класс
class AuthMiddleware extends Middleware
{
    public function handle(): bool
    {
        return isset($_SESSION['user']);
    }
}

// Замыкание
Route::get("/admin", fn() => view("admin"))
    ->middleware(function () {
        return checkPermissions("admin");
    });
```

### Работа с базой данных

Используется Eloquent ORM:

```php
namespace Database\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content'];
    
    // Отключение timestamps если нужно
    public $timestamps = false;
}
```

### Dependency Injection

Регистрация зависимостей в `index.php`:

```php
$injector->alias(UserRepository::class, MySQLUserRepository::class);
```

Автоматическое внедрение в контроллеры и middleware:

```php
public function show(Request $request, UserRepository $users)
{
    $user = $users->find($request->get('id'));
    // ...
}
```

### HTTP Ответы

```php
// JSON ответ
responseJson(['status' => 'success'], 200);

// HTML ответ
responseHtml('<h1>Hello</h1>', 200);

// Ошибки
response404();
response500();
```

## Ограничения

1. **Шаблонизатор**:
   - Не поддерживает сложные условные конструкции
   - Нет встроенной системы кэширования компилированных шаблонов

2. **Маршрутизация**:
   - Нет поддержки групп маршрутов
   - Нет автоматической валидации параметров маршрута

3. **ORM**:
   - Ограничен функционалом Eloquent
   - Нет встроенной системы миграций

4. **Middleware**:
   - Нет поддержки глобальных middleware
   - Нет приоритетов выполнения

## Производительность

- Минимальное использование памяти
- Быстрая маршрутизация
- Оптимизированная шаблонизация
- Кэширование там, где это возможно

## Безопасность

- Экранирование вывода в шаблонах
- Защита от SQL-инъекций через ORM
- Безопасная обработка пользовательского ввода
- Отсутствие eval() в шаблонизаторе

## Вклад в разработку

1. Форкните репозиторий
2. Создайте ветку для новой функции
3. Отправьте пулл-реквест

## Лицензия

MIT License - см. [LICENSE.txt](LICENSE.txt)

## Автор

Arseniy Druzhinin - [arseniy985](https://github.com/arseniy985)