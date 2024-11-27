# pHUIp Framework

Легкий и быстрый PHP фреймворк с современной архитектурой и простым API. Разработан для создания эффективных веб-приложений с минимальными накладными расходами.

## Особенности

- 🚀 **Высокая производительность**: Оптимизированная маршрутизация и обработка запросов
- 💉 **Dependency Injection**: Встроенный контейнер внедрения зависимостей (Auryn)
- 🎨 **Шаблонизация**: Безопасный и эффективный движок шаблонов
- 🗃️ **ORM**: Интеграция с Eloquent ORM
- 🛡️ **Middleware**: Гибкая система промежуточного ПО
- 🎯 **Простота использования**: Интуитивно понятный API и минимальная конфигурация
- 📦 **Группы маршрутов**: Поддержка вложенных групп с префиксами
- 🔒 **Безопасность**: Встроенная защита и безопасная обработка данных

## Требования

- PHP 8.0 или выше
- Composer
- MySQL/PostgreSQL (для работы с базой данных)
- Apache с mod_rewrite (или nginx с аналогичной конфигурацией)

## Установка

```bash
# Через Composer
composer require arseniy985/phuip

# Или клонирование репозитория
git clone https://github.com/arseniy985/pHUIp-framework/
cd pHUIp-framework
composer install
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

// Динамические маршруты с параметрами
Route::get("/users/{id}", [UserController::class, "show"]);
Route::get("/posts/{categoryId}/comments/{commentId}", [PostController::class, "showComment"]);

// Получение параметров в контроллере
class UserController 
{
    public function show(Request $request): void
    {
        // Получение одного параметра
        $userId = $request->param('id');
        
        // Получение всех параметров маршрута
        $params = $request->params();
        
        // Работа с данными
        $user = $this->userRepository->find($userId);
        PageGenerator::render('user', ['user' => $user]);
    }
}

// Группы маршрутов с префиксом
Route::group('/admin', function(RouteGroup $group) {
    $group->get('/dashboard', [AdminController::class, 'index']);
    
    // Динамические маршруты в группах
    $group->get('/users/{id}', [AdminController::class, 'showUser']);
    
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
```

### Контроллеры

Контроллеры размещаются в `http/Controllers` и поддерживают автоматическое внедрение зависимостей:

```php
namespace http\Controllers;

class UserController 
{
    public function show(Request $request): void
    {
        $user = User::find($request->param('id'));
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

Используется Eloquent ORM для удобной работы с базой данных:

```php
namespace Database\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content'];
    
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
```

### Миграции

Миграции создаются в директории `database/migrations`:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
```

#### Запуск миграций

Для запуска миграций используйте команду:

```bash
php database/migrate.php
```

Это создаст все таблицы, определенные в ваших миграциях.

Для отката миграций используйте:

```bash
php database/migrate.php rollback
```

Миграции выполняются в алфавитном порядке по имени файла, поэтому рекомендуется использовать префикс с датой или порядковым номером, например:
- `001_create_users_table.php`
- `002_create_posts_table.php`
- `003_add_user_settings.php`

## Зависимости

Основные зависимости фреймворка:

- PHP >= 8.0
- rdlowrey/auryn: ^1.4 (DI Container)
- illuminate/database: ^11.30 (Eloquent ORM)
- vlucas/phpdotenv: ^5.6 (Работа с .env файлами)
- laravel/serializable-closure: ^1.3 (Сериализация замыканий)

## Лицензия

MIT License. См. файл [LICENSE.txt](LICENSE.txt) для подробностей.