# pHUIp Framework

Легкий и быстрый PHP фреймворк с современной архитектурой и простым API. Разработан для создания эффективных веб-приложений с минимальными накладными расходами.

## Особенности

- 🚀 **Высокая производительность**: Оптимизированная маршрутизация и обработка запросов
- 💉 **Dependency Injection**: Встроенный контейнер внедрения зависимостей
- 🎨 **Шаблонизация**: Безопасный и эффективный движок шаблонов
- 🗃️ **ORM**: Интеграция с Eloquent ORM от Laravel
- 🛡️ **Middleware**: Гибкая система промежуточного ПО
- 🎯 **Простота использования**: Интуитивно понятный API и минимальная конфигурация
- 📦 **Группы маршрутов**: Поддержка вложенных групп с префиксами

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

Поддерживаются все основные HTTP методы и группы маршрутов:

```php
// Базовые маршруты
Route::get("/", [HomeController::class, "index"]);
Route::post("/users", [UserController::class, "create"]);

// Группы маршрутов с префиксом
Route::group('/admin', function(RouteGroup $group) {
    $group->get('/dashboard', [AdminController::class, 'index']);
    $group->get('/users', [AdminController::class, 'list']);
    
    // Вложенные группы
    $group->group('/settings', function(RouteGroup $settings) {
        $settings->get('/general', [SettingsController::class, 'general']);
        $settings->get('/security', [SettingsController::class, 'security']);
    });
})->middleware(AdminAuthMiddleware::class);
```

### Middleware

Middleware определяются как классы с методом `handle`:

```php
namespace http\Middlewares;

class AuthMiddleware extends Middleware
{
    public function handle(AuthService $auth): bool
    {
        return $auth->check();
    }
}

// Использование в маршрутах
Route::get('/profile', [UserController::class, 'show'])
    ->middleware(AuthMiddleware::class);

// Использование в группах
Route::group('/admin', function(RouteGroup $group) {
    $group->get('/dashboard', [AdminController::class, 'index']);
})->middleware(AdminAuthMiddleware::class);
```

### Контроллеры

Контроллеры размещаются в `http/Controllers` и поддерживают автоматическое внедрение зависимостей:

```php
namespace http\Controllers;

class UserController 
{
    public function show(Request $request, UserRepository $users, int $id): void
    {
        $user = $users->find($id);
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

Автоматическое внедрение зависимостей работает во всех компонентах:

```php
// В контроллерах
public function show(Request $request, UserRepository $users)
{
    $user = $users->find($request->get('id'));
}

// В middleware
public function handle(AuthService $auth): bool
{
    return $auth->check();
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

## Производительность

- Минимальное использование памяти
- Быстрая маршрутизация
- Оптимизированная шаблонизация
- Кэширование шаблонов и маршрутов

## Безопасность

- Экранирование вывода в шаблонах
- Защита от SQL-инъекций через ORM
- Безопасная обработка пользовательского ввода
- Строгая типизация и валидация

## Вклад в разработку

1. Форкните репозиторий
2. Создайте ветку для новой функции
3. Отправьте пулл-реквест

## Лицензия

MIT License - см. [LICENSE.txt](LICENSE.txt)

## Автор

Arseniy Druzhinin - [arseniy985](https://github.com/arseniy985)