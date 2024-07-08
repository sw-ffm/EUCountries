<?php

require_once __DIR__ . '/../vendor/autoload.php';

use swffm\EUCountries\Database\PDOConnector;

try {
    $pdo = PDOConnector::getInstance();
    echo "PDOConnector loaded successfully.";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}