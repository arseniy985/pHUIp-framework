<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../http/app/helpers.php';

use Dotenv\Dotenv;

// Загружаем переменные окружения
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Получаем список всех файлов миграций
$files = glob(__DIR__ . '/migrations/*.php');
sort($files); // Сортируем файлы для последовательного выполнения

// Проверяем действие (migrate или rollback)
$action = isset($argv[1]) ? $argv[1] : 'migrate';

foreach ($files as $file) {
    // Получаем имя класса из имени файла
    $className = 'database\\migrations\\' . pathinfo($file, PATHINFO_FILENAME);
    
    try {
        // Создаем экземпляр миграции и запускаем
        $migration = new $className();
        
        if ($action === 'rollback') {
            echo "Rolling back migration: " . pathinfo($file, PATHINFO_FILENAME) . "\n";
            $migration->down();
        } else {
            echo "Running migration: " . pathinfo($file, PATHINFO_FILENAME) . "\n";
            $migration->up();
        }
        
        echo "✓ Success\n";
    } catch (Exception $e) {
        echo "✗ Error: " . $e->getMessage() . "\n";
        exit(1);
    }
}
