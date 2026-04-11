#!/bin/bash

# Configuration
DOMAIN="dokkan.almoq3.com"
EMAIL="admin@almoq3.com" # Change this

# 1. Pull latest changes
echo ">>> Pulling latest changes..."
git pull origin main

# 2. Build and start containers
echo ">>> Starting Docker containers..."
docker compose up -d --build

# 3. Wait for DB to be ready
echo ">>> Waiting for database..."
sleep 15

# 4. Install dependencies (inside container)
echo ">>> Fixing permissions..."
docker compose exec --user root app chown -R www-data:www-data /var/www
echo ">>> Installing Composer dependencies..."
docker compose exec app composer update --no-dev --optimize-autoloader

# 5. Run Migrations
echo ">>> Running Database Migrations..."
docker compose exec app php artisan migrate --force

# 6. Optimize Laravel
echo ">>> Optimizing Laravel..."
docker compose exec app php artisan optimize
docker compose exec app php artisan view:cache
docker compose exec app php artisan config:cache
docker compose exec app php artisan event:cache

# 7. Setup Storage and Link
echo ">>> Setting up storage links..."
docker compose exec app php artisan storage:link

# 8. Setup MinIO Bucket (If first time)
echo ">>> Ensuring MinIO bucket exists..."
# This requires mc (minio client) or can be done via app logic
# For now, we assume the app handles bucket creation if missing or user creates it via console at :9001

echo ">>> Deployment Complete!"
echo ">>> Access the API at: https://almoq3.com"
echo ">>> Access MinIO Console at: http://almoq3.com:9001"
