# Stage 1: Build with Node for assets
FROM node:18 AS node-build

WORKDIR /app
RUN npm install -g pnpm

# Clone your repo
RUN git clone https://github.com/dconco/pip-galaxy.git .
RUN pnpm install
RUN pnpm build

# Stage 2: PHP with Composer
FROM composer:2 AS composer-build

WORKDIR /app
RUN git clone https://github.com/dconco/pip-galaxy.git .
RUN composer install --no-dev --optimize-autoloader

# Stage 3: Final runtime using PHP
FROM php:8.3-cli

WORKDIR /var/www/html
COPY --from=node-build /app /var/www/html
COPY --from=composer-build /app/vendor /var/www/html/vendor

ENV APP_ENV=production

# create production environment file
RUN echo "APP_ENV=production" >> .env
RUN echo "APP_ENV=production" >> .env.production

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
