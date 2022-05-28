#!/bin/bash
FILE_WEBPACK=webpack.mix.js

install:
	cp .env.example .env
	composer install
	npm install
	php artisan key:generate

install-dev: install sail-install webpack-prepare

webpack-prepare:
	echo "const mix = require('laravel-mix');" | tee $(FILE_WEBPACK) > /dev/null
	echo "mix.webpackConfig({ stats: { children: true, }, });" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.js('resources/js/app.js', 'public/js');" | tee -a $(FILE_WEBPACK) > /dev/null
	npm install sass-loader sass resolve-url-loader --save-dev --legacy-peer-deps
	rm -rf ./resources/css
	echo "mix.sass('resources/sass/app.scss', '/public/css');" | tee -a $(FILE_WEBPACK) > /dev/null
	npm install browser-sync browser-sync-webpack-plugin --save-dev --legacy-peer-deps
	echo "mix.browserSync({ proxy: 'localhost', open: false });" | tee -a $(FILE_WEBPACK) > /dev/null

sail-install:
	php artisan sail:install --with mariadb
	npm install sail

sail-build:
	./vendor/bin/sail build

sail-up:
	./vendor/bin/sail up -d

sail-down:
	./vendor/bin/sail down

watch:
	npm run watch

production:
	npm run production
