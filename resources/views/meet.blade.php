@extends('layout')

@section('title')
<title>{{ $meeting->name }}</title>
@endsection

@section('content')

    <section class="section-100">
        <div class="container-meet-main">

            <div class="container-meet-elem">
                <i class="fa fa-calendar-check-o"></i>
                <h4>{{ date('d.m.Y', strtotime($meeting->meet_date)) }}</h4>
            </div>

            <div class="container-meet-elem">
                <i class="fa fa-users"></i>
                <h4>СПИКЕРЫ СО ВСЕЙ РОССИИ</h4>
            </div>

            <div class="container-meet-elem">
                <i class="fa fa-map-marker"></i>
                <h4>{{ $meeting->address }}</h4>
            </div>

            <div class="container-meet-elem">
                <i class="fa fa-modx"></i>
                <h4>ПРАКТИЧЕСКИЕ ЗАДАНИЯ</h4>
            </div>

            <div class="container-meet-elem">
                <i class="fa fa-balance-scale"></i>
                <h4>БАТТЛЫ ПЕРЕГОВОРЩИКОВ</h4>
            </div>

            <div class="container-meet-elem">
                <i class="fa fa-glass"></i>
                <h4>УЖИН СО СПИКЕРАМИ</h4>
            </div>
        </div>

        <div class="container-meet-video">

            <div class="container-meet-video-elem">
                <q>Бизнес - без волшебной таблетки!<br>Продажи - без скриптов!<br>Переговоры - без поражения!</q>
                <button class="section-btn-white" onclick="window.open('/docs{{ $meeting->url }}.pdf')">ПРОГРАММА (pdf)</button>
                <button class="section-btn-white" onclick="window.location.href = '#docs'">О ПРОЕКТЕ</button>
                <button class="section-btn-white" onclick="window.location.href = '#price'">СТОИМОСТЬ</button>
            </div>

            <div class="container-meet-video-elem">
                <h2>Видео о нашем проекте</h2>
                <video controls preload="none">
                  <source src="images/global_video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <!-- LOGO AND SPONSORS -->

    <!-- SPEAKERS -->
    <section class="section-100 columns">
        <h2>ДЕЛОВАЯ ПРОГРАММА</h2>
        <div class="container-programma">

            <div class="programma-left">
                {!! $meeting->plan_one !!}
            </div>

            <div class="programma-left programma-right">
                {!! $meeting->plan_two !!}
            </div>

        </div>

    </section>
    <!-- SPEAKERS -->

    <!-- REVIEWS -->
    <section id="docs" class="section-100 columns">
        <div class="section-title">
            <h2>ОТЗЫВЫ О ПРЕДЫДУЩИХ ТРЕНИНГАХ</h2>
        </div>

        <div class="container-docs">

            <div class="col-1-4">
                <div class="youtube" id="hcJX2u2Z17o"></div>
            </div>

            <div class="col-1-4">
                <div class="youtube" id="jx3S_3aH5ow"></div>
            </div>

            <div class="col-1-4">
                <div class="youtube" id="xAuzSn2cUI0"></div>
            </div>

            <div class="col-1-4">
                <div class="youtube" id="GP0EKeOmRfA"></div>
            </div>

            <div class="col-1-4">
                <div class="youtube" id="zSvEp2Nd8FA"></div>
            </div>

            <div class="col-1-4">
                <div class="youtube" id="M_ko_HfQrUg"></div>
            </div>

        </div>
    </section>
    <!-- REVIEWS -->

    <!-- CALLBACK & BUTTONS -->
    <section id="callbacks" class="section-100">
        <div class="container-meet-video callbacks">

            <div class="container-meet-video-elem">
                <img src="/images/logopi.png" />
            </div>

            <div class="container-meet-video-elem">
                <div class="my-form">
                    <form action="post-form.php" class="contact-form" method="post">
                        <h2>Оставить заявку на участие</h2>
                        <div class="input-box">
                            <input type="text" name="user_name" placeholder="*Имя" minlength="3" maxlength="50" pattern="[a-zA-Zа-яА-Я]{2,}\s?[a-zA-Zа-яА-Я]{0,}" required />
                        </div>
                        <div class="input-box">
                            <input type="email" inputmode="email" name="user_email" placeholder="Email-адрес" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" />
                        </div>
                        <div class="input-box">
                            <input type="tel" inputmode="tel" name="user_phone" placeholder="*Номер телефона" maxlength="20" pattern="\+?[0-9]?\s?\(?[0-9]{0,4}\)?\s?[0-9]{6,15}" required />
                        </div>
                        <div class="input-box">
                            <input name="theme" type="hidden" value="{{ $meeting->name }}" />
                        </div>
                        <div class="my-button-meet">
                            <input type="submit" value="Отправить">
                        </div>
                        <p>Нажимая кнопку "Отправить" вы выражаете<br>своё согласие на обработку персональных данных.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CALLBACK & BUTTONS -->

    <!-- PRICE -->
    <section id="price" class="section-100 columns">
        <div class="section-title">
            <h2>СТОИМОСТЬ УЧАСТИЯ</h2>
        </div>
        <div class="container-price">

            <div class="container-price-elem">
                <img src="/images/price2.jpg" />
                <h4>УЧАСТИЕ ЗРИТЕЛЕЙ И ИГРОКОВ</h4>
                @if (isset($meeting->price) > 0)
                    {!! $meeting->price !!}
                @else
                    <p>Стоимость пока не сформирована.</p>
                @endif
                <button class="meet-btn" onclick="window.location.href='#callbacks';">РЕГИСТРАЦИЯ</button>
            </div>

            <div class="container-price-elem">
                <img src="/images/price1.jpg" />
                <h4>ЦЕРЕМОНИЯ НАГРАЖДЕНИЯ</h4>
                @if (isset($meeting->price_extra) > 0)
                    {!! $meeting->price_extra !!}
                @else
                    <p>Стоимость пока не сформирована.</p>
                @endif
                <button class="meet-btn" onclick="window.location.href='#callbacks';">РЕГИСТРАЦИЯ</button>
            </div>

        </div>
    </section>
    <!-- ABOUT -->


    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row" align="center">
                <div class="section-title">
                    <h2>КОНТАКТЫ</h2>
                </div>
                <div class="container-price">

                <div class="col-md-6 col-sm-12">
                    <div class="section-title">
                        <h2>КОНТАКТЫ</h2>
                        <p>avanrielt@mail.ru</p>
                        <p>+7-965-614-94-67 (Гульназ) - WhatsApp, Telegram, Viber</p>
                        <p>+7-966-260-30-90 (Вячеслав) – WhatsApp, Telegram, Viber</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="section-title">
                        <h2>МЕСТО ПРОВЕДЕНИЯ</h2>
                        <p>{{ $meeting->address }}</p>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
  <!-- SCRIPTS -->
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/smoothscroll.js"></script>
  <script src="/js/custom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/js/lazyload.js"></script>
  <script src="/js/youtube.js"></script>
@endpush
