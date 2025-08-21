#!/bin/bash
set -e

echo "=== Ajustando permissões ==="
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

echo "=== Instalando dependências PHP se necessário ==="
if [ ! -d "vendor" ]; then
    composer install --no-progress --prefer-dist --optimize-autoloader
fi

echo "=== Limpando caches do Laravel e otimizando ==="
php artisan config:clear || true
php artisan route:clear || true
php artisan cache:clear || true
php artisan view:clear || true
php artisan optimize || true

echo "=== Iniciando Supervisor ==="
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
