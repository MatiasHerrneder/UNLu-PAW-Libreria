<?php
$host = 'localhost';
$db   = 'postgres';
$user = 'postgres';
$pass = 'postgres';
$port = '5432';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT version();");
    $version = $stmt->fetchColumn();

    echo "✅ Conexión exitosa. Versión de PostgreSQL: $version\n";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage() . "\n";
}
