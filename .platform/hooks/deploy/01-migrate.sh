#!/bin/bash

# Run migrations without dropping tables
php artisan migrate --force

# Clear various caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Optimize for production
php artisan optimize 