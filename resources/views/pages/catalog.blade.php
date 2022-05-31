@extends('layouts.main')

@section('subtitle', 'Магазин')

@section('header-additional')
    <div class="catalog-title">
        <h1>Магазин готовых шаблонов</h1>
    </div>
@endsection

@section('content')
    <main class="container">
        <div class="main-content-catalog">
            <aside>
                <h2 class="visually-hidden">Боковая панель фильтрации</h2>

                <form class="filter-form">

                    <section>
                        <h3>Стоимость:</h3>

                        <div class="multi-range-block">
                            <div class="multi-range">
                                <div class="multi-bar"></div>
                                <div class="multi-bar-green"></div>
                                <input type="range" min="0" max="15000" value="1000" id="min-toggle">
                                <input type="range" min="0" max="15000" value="10000" id="max-toggle">
                            </div>
                        </div>

                        <div class="price-controls">
                            <label class="min-price">от <input name="min-price" id="min-price" type="text"
                                                               value="0"></label>
                            <label class="max-price">до <input name="max-price" id="max-price" type="text"
                                                               value="15000"></label>
                        </div>

                    </section>

                    <section>
                        <h3>Сетка:</h3>
                        <fieldset>
                            <legend class="visually-hidden">Выберите тип верстки</legend>

                            <span>
                <input type="radio" class="radio-box" id="radio-adaptive" name="layout" value="adaptive" checked>
                <label for="radio-adaptive">Адаптивная</label>
              </span>

                            <span>
                <input type="radio" class="radio-box" id="radio-fixed" name="layout" value="fixed">
                <label for="radio-fixed">Фиксированая</label>
              </span>

                            <span>
                <input type="radio" class="radio-box" id="radio-stretch" name="layout" value="stretch" disabled>
                <label for="radio-stretch">Резиновая</label>
              </span>

                        </fieldset>
                    </section>

                    <section>
                        <h3>Особенности:</h3>
                        <fieldset>
                            <legend class="visually-hidden">Выберите особенности сайта</legend>

                            <span>
                <input type="checkbox" class="check-box" name="details" value="slider" id="check-slider" checked>
                <label for="check-slider">Слайдер</label>
              </span>

                            <span>
                <input type="checkbox" class="check-box" name="details" value="privilege" id="check-privilege" disabled>
                <label for="check-privilege">Блок преимуществ</label>
              </span>

                            <span>
                <input type="checkbox" class="check-box" name="details" value="news" id="check-news" checked>
                <label for="check-news">Новости</label>
              </span>

                            <span>
                <input type="checkbox" class="check-box" name="details" value="gallery" id="check-gallery">
                <label for="check-gallery">Галерея</label>
              </span>

                            <span>
                <input type="checkbox" class="check-box" name="details" value="cart" id="check-cart">
                <label for="check-cart">Корзина</label>
              </span>
                        </fieldset>
                    </section>

                    <button type="submit">Показать</button>
                </form>
            </aside>

            <div class="catalog-content">

                <div class="content-sort">
                    <h3>Сортировать:</h3>

                    <div class="content-sort-buttons">
                        <a href="#" class="active-sort">По цене</a>
                        <a href="#">По типу</a>
                        <a href="#">По названию</a>
                        <a href="#" class="active-sort"><img src="{{ asset('images/icon-up-down-dir.svg') }}"></a>
                        <a href="#"><img src="{{ asset('images/icon-up-down-dir.svg') }}"></a>
                    </div>

                </div>

                <div class="cards-grid">
                    <div class="card">
                        <img src="{{ asset('images/browser.svg') }}" alt="Card decoration image">
                        <img src="{{ asset('images/card.jpg') }}" alt="Card content image">

                        <div class="card-more">
                            <h3>PINK</h3>
                            <p>Взгляни на жизнь иначе!</p>
                            <button>7 890 руб.</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/browser.svg') }}" alt="Card decoration image">
                        <img src="{{ asset('images/card.jpg') }}" alt="Card content image">

                        <div class="card-more">
                            <h3>PINK</h3>
                            <p>Взгляни на жизнь иначе!</p>
                            <button>7 890 руб.</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/browser.svg') }}" alt="Card decoration image">
                        <img src="{{ asset('images/card.jpg') }}" alt="Card content image">

                        <div class="card-more">
                            <h3>PINK</h3>
                            <p>Взгляни на жизнь иначе!</p>
                            <button>7 890 руб.</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/browser.svg') }}" alt="Card decoration image">
                        <img src="{{ asset('images/card.jpg') }}" alt="Card content image">

                        <div class="card-more">
                            <h3>PINK</h3>
                            <p>Взгляни на жизнь иначе!</p>
                            <button>7 890 руб.</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/browser.svg') }}" alt="Card decoration image">
                        <img src="{{ asset('images/card.jpg') }}" alt="Card content image">

                        <div class="card-more">
                            <h3>PINK</h3>
                            <p>Взгляни на жизнь иначе!</p>
                            <button>7 890 руб.</button>
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{ asset('images/browser.svg') }}" alt="Card decoration image">
                        <img src="{{ asset('images/card.jpg') }}" alt="Card content image">

                        <div class="card-more">
                            <h3>PINK</h3>
                            <p>Взгляни на жизнь иначе!</p>
                            <button>7 890 руб.</button>
                        </div>
                    </div>

                </div>

                @include('common.components.paginator')

            </div>

        </div>
    </main>
@endsection
