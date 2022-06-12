FILE_WEBPACK=webpack.mix.js

install-common:
	cp .env.example .env
	php artisan key:generate

install-dev: resources-dev install-common sail-install webpack 

install-prod: resources-prod install-common

webpack:
	echo "const mix = require('laravel-mix');" | tee $(FILE_WEBPACK) > /dev/null
	echo "mix.webpackConfig({ stats: { children: true, }, });" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.js('resources/js/app.js', 'public/js');" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.sass('resources/sass/app.scss', '/public/css');" | tee -a $(FILE_WEBPACK) > /dev/null
	echo "mix.browserSync({ proxy: 'localhost', open: false });" | tee -a $(FILE_WEBPACK) > /dev/null
	rm -rf ./resources/css
	npm install browser-sync browser-sync-webpack-plugin --save-dev --legacy-peer-deps
	npm install sass-loader sass resolve-url-loader --save-dev --legacy-peer-deps

sail-install:
	npm install sail
	php artisan sail:install --with mariadb

sail-build:
	./vendor/bin/sail build

sail-up:
	./vendor/bin/sail up -d

sail-down:
	./vendor/bin/sail down

watch:
	npm run watch

resources-prod:
	composer install --no-dev
	npm install --production
	
	php artisan optimize
	
resources-dev:
	composer install
	npm install
	npm run dev
