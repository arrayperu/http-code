<?php
include __DIR__ . "/../vendor/autoload.php";

use ArrayPeru\HttpCode;

echo HttpCode::HTTP_CONTINUE . "\n";
echo HttpCode::HTTP_OK . "\n";
echo HttpCode::HTTP_MULTIPLE_CHOICES . "\n";
echo HttpCode::HTTP_BAD_REQUEST . "\n";
echo HttpCode::HTTP_INTERNAL_SERVER_ERROR . "\n" . "\n";

echo HttpCode::text(HttpCode::HTTP_CONTINUE) . "\n";
echo HttpCode::text(HttpCode::HTTP_OK) . "\n";
echo HttpCode::text(HttpCode::HTTP_MULTIPLE_CHOICES) . "\n";
echo HttpCode::text(HttpCode::HTTP_BAD_REQUEST) . "\n";
echo HttpCode::text(HttpCode::HTTP_INTERNAL_SERVER_ERROR) . "\n";
