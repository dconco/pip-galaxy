FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Stage 2: Node dependencies & Tailwind build (pnpm)
FROM node:20 AS frontend
WORKDIR /app
COPY package.json pnpm-lock.yaml ./
RUN npm install -g pnpm && pnpm install
COPY . . 
RUN pnpm build   # builds Tailwind into public/

# Stage 3: Runtime (Apache + PHP)
FROM php:8.3-apache

# Enable Apache rewrite for SPA / Laravel-style routing
RUN a2enmod rewrite

# Set environment for PHP app
ENV APP_ENV=production

# Workdir
WORKDIR /var/www

# Copy PHP vendor deps
COPY --from=vendor /app/vendor ./vendor

# Copy PHP source code and configs
COPY src ./src
COPY composer.json composer.lock ./

# Copy built frontend assets (public folder after pnpm build)
COPY --from=frontend /app/public ./public

# Apache should serve public/
WORKDIR /var/www/html
RUN rm -rf /var/www/html && ln -s /var/www/public /var/www/html

# Expose Apache port
EXPOSE 80
