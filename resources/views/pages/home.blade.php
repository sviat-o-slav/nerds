@extends('layouts.main')

@section('header-additional')
    <div class="slider">

        <div class="slider-controls">
            <span class="slider-dot slider-dot-active"></span>
            <span class="slider-dot"></span>
            <span class="slider-dot"></span>
        </div>

        <div class="slides">

            <div class="slide fade">
                <div class="slide-text">
                    <div class="slide-title">Долго, дорого, скрупулезно</div>
                    <p>Математически выверенный дизайн<br>
                        для вашего сайта или мобильного приложения.</p>
                    <a class="btn" href="#">Узнать больше</a>
                </div>
            </div>

            <div class="slide fade">
                <div class="slide-text">
                    <div class="slide-title">Дорого, скрупулезно</div>
                    <p>Математически выверенный дизайн<br>
                        для вашего сайта или мобильного приложения.</p>
                    <a class="btn" href="#">Узнать больше</a>
                </div>
            </div>

            <div class="slide fade">
                <div class="slide-text">
                    <div class="slide-title">Скрупулезно</div>
                    <p>Математически выверенный дизайн<br>
                        для вашего сайта или мобильного приложения.</p>
                    <a class="btn" href="#">Узнать больше</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <main class="container main-content">
        <div class="preview-variants">
            <section class="preview-card">
                <h2>Веб-сайты</h2>
                <div class="preview-card-image color-red">
                    <img src="{{ asset('images/preview1.png') }}" alt="Laptop image">
                </div>

                <p>Мир никогда не будет прежним после того как увидит ваш сайт!</p>
                <a class="color-red" href="#">Заказать</a>
            </section>

            <section class="preview-card">
                <h2>Приложения</h2>
                <div class="preview-card-image color-green">
                    <img src="{{ asset('images/preview2.png') }}" alt="Mobile phone image">
                </div>

                <p>Покорите топ-10 приложений в Google Play и Apple Store</p>
                <a class="color-green" href="#">Заказать</a>
            </section>

            <section class="preview-card">
                <h2>Презентации</h2>
                <div class="preview-card-image color-yellow">
                    <img src="{{ asset('images/preview3.png') }}" alt="Presentation image">
                </div>

                <p>Вы даже не подозреваете, насколько вы удивительны!</p>
                <a class="color-yellow" href="#">Заказать</a>
            </section>
        </div>

        <div class="preview-more">
            <section class="preview-more-info">
                <h2>Мы - маленькая, но гордая дизайн-студия из Краснодара.</h2>
                <p>Исповедуем принципы минимализма и чистоты. Ставим математический расчет
                    превыше креатива. Работаем не покладаю рук, как роботы.</p>

                <h3>Выполняем заказы на разработку:</h3>
                <ul>
                    <li>Веб-сайтов любой сложности</li>
                    <li>Мобильных приложений для iOS и Android</li>
                    <li>Слайд-шоу и видео для корпоративных презентаций</li>
                </ul>
            </section>

            <section class="preview-more-levels">
                <h2 class="visually-hidden">Nerds tips</h2>
                <img src="{{ asset('images/nerds-color.jpg') }}" alt="Nerds logo">

                <p>С 2004 года любим точность во всем:</p>

                <dl>
                    <div>
                        <dt>146</dt>
                        <dd>Уровень самоотдачи</dd>
                    </div>

                    <div>
                        <dt>100</dt>
                        <dd>Соблюдение сроков</dd>
                    </div>

                    <div>
                        <dt>50</dt>
                        <dd>Мнимальная предоплата</dd>
                    </div>
                </dl>

            </section>
        </div>

        <section class="brands">
            <a class="brand-item" href="#"><img src="{{ asset('images/brand1.jpg') }}" alt="HTML Academy"></a>
            <a class="brand-item" href="#"><img src="{{ asset('images/brand2.jpg') }}" alt="Borodinski"></a>
            <a class="brand-item" href="#"><img src="{{ asset('images/brand3.jpg') }}" alt="Pink"></a>
            <a class="brand-item" href="#"><img src="{{ asset('images/brand4.jpg') }}" alt="Mishka"></a>
        </section>

    </main>
@endsection
