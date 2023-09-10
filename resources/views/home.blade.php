@extends('layout')

@section('title')
<title>Проект ПЕРЕГОВОРНЫЕ ИГРЫ</title>
@endsection

@section('content')

	<!-- LOGO AND COACHES -->
    <section class="section-100">
        <div class="team-container">

            <div class="team-item">
                <div class="team-image">
                    <img data-src="images/egorov_s.jpg" class="img-responsive lazy" alt="">
                    <div class="team-txt egorov">
                        <h3>ВЯЧЕСЛАВ ЕГОРОВ</h3>
                        <div class="hids">
                            <i class="fa fa-angle-double-up"></i>
                        </div>
                    </div>
                </div>
                <ul class="social-icon-small">
                    <li><a href="https://www.facebook.com/vjacneslav.egorov" class="fa fa-facebook"></a></li>
                    <li><a href="https://peregovory.info" class="fa fa-envelope-o"></a></li>
                    <li><a href="https://vk.com/avanrielt.egoroff" class="fa fa-vk"></a></li>
                </ul>
            </div>

            <div class="team-item">
                <div class="team-image">
                    <img data-src="images/gorunov_s.jpg" class="img-responsive lazy" alt="">
                    <div class="team-txt gorunov">
                        <h3>ВЯЧЕСЛАВ ГОРЮНОВ</h3>
                        <div class="hids">
                            <i class="fa fa-angle-double-up"></i>
                        </div>
                    </div>
                </div>
                <ul class="social-icon-small">
                    <li><a href="https://www.facebook.com/profile.php?id=100003109466633" class="fa fa-facebook"></a></li>
                    <li><a href="https://peregovory.info" class="fa fa-envelope-o"></a></li>
                    <li><a href="https://vk.com/goryunov74" class="fa fa-vk"></a></li>
                </ul>
            </div>

        </div>

    </section>
    <!-- LOGO AND COACHES -->

    <!-- ITOGI 2022 -->
    <section class="section-100">
        <div class="itog-container">

            <div class="itog-item">
                <button class="float-btn" onclick="window.open('/docs/champs2022.pdf');">ИТОГИ ЧЕМПИОНАТА 2022</button>
            </div>

            <div class="itog-item">
                <button class="float-btn" onclick="window.open('/docs/gf_itogi.pdf');">ИТОГИ ГРАНД ФИНАЛА 2022</button>
            </div>

            <div class="itog-item">
                <button class="float-btn-w" onclick="window.open('https://docs.google.com/spreadsheets/d/1s1rD5QiMgYXyXX4MWVpE1nMxyl1T7OqSRMgz5qvLx0w/edit?usp=sharing');">РЕЗУЛЬТАТЫ ЧЕМПИОНАТА 2023</button>
            </div>

        </div>

    </section>
    <!-- ITOGI 2022 -->

    <!-- NEW CHAMPIONATS -->
    <section class="section-100">
        <div class="slider-container">
            <div class="section-title">
                <h2>КАЛЕНДАРЬ ЧЕМПИОНАТА НА СЕЗОН 2023</h2>
            </div>

            <div class="slider-100">

                <div class="owl-carousel owl-theme owl-client">

                    @foreach ($new_meetings as $meeting)
                        <div class="item">
                            <div class="tst-author">
                                <h4>{{ $meeting->name }}</h4>
                            </div>
                            <div class="tst-author">
                                <i class="fa fa-calendar"></i>
                                <span>{{ date('d.m.Y', strtotime($meeting->meet_date)) }}</span>
                            </div>
                            <div class="tst-author">
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $meeting->address }}</span>
                            </div>
                            <div class="tst-author">
                                <i class="fa fa-bullseye"></i>
                                <span>{{ $meeting->description }}</span>
                            </div>
                            <div class="tst-author bttn">
                                <button class="section-btn" onclick="window.location.href = '/meet{{ $meeting->url }}'">Регистрация</button>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($old_meetings as $meeting)
                        <div class="item-old">
                            <div class="tst-author old-author">
                                <h4>{{ $meeting->name }}</h4>
                            </div>
                            <div class="tst-author old-author">
                                <i class="fa fa-calendar"></i>
                                <span>{{ date('d.m.Y', strtotime($meeting->meet_date)) }}</span>
                            </div>
                            <div class="tst-author old-author">
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $meeting->address }}</span>
                            </div>
                            <div class="tst-author old-author">
                                <i class="fa fa-bullseye"></i>
                                <span>{{ $meeting->description }}</span>
                            </div>
                            <div class="tst-author bttn">
                                <button class="section-btn white-btn" onclick="window.location.href = '/itogi#{{ substr($meeting->url, 1) }}'">Итоги</button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>
    <!-- NEW CHAMPIONATS -->

    <!-- DOCUMENTS -->
    <section class="section-100 columns">
        <div class="section-title">
            <h2>СТАНДАРТЫ ПРОВЕДЕНИЯ ЧЕМПИОНАТА<br>ПО ПЕРЕГОВОРНЫМ ИГРАМ</h2>
        </div>

        <div class="container-docs">

            <div class="col-1-3">
                <i class="fa fa-file-pdf-o" onclick="window.open('docs/criteries.pdf');"></i>
                <h4>Критерии оценки для членов жюри</h4>
            </div>

            <div class="col-1-3">
                <i class="fa fa-file-pdf-o" onclick="window.open('docs/rules_and_recomendations.pdf');"></i>
                <h4>Правила и рекомендации Чемпионата</h4>
            </div>

            <div class="col-1-3">
                <i class="fa fa-file-pdf-o" onclick="window.open('docs/info_to_championats.pdf');"></i>
                <h4>Разъяснения к Чемпионату и описание</h4>
            </div>

            <div class="col-1-3">
                <i class="fa fa-file-pdf-o" onclick="window.open('docs/questions2022.pdf')"></i>
                <h4>Вопросы по Переговорным играм для риэлторов</h4>
            </div>

            <div class="col-1-3">
                <i class="fa fa-file-image-o" onclick="window.open('docs/logo_pi.png');"></i>
                <h4>Логотип "Переговорные Игры"</h4>
            </div>

            <div class="col-1-3">
                <i class="fa fa-file-image-o" onclick="window.open('docs/logo_champ.png');"></i>
                <h4>Логотип Чемпионата России</h4>
            </div>

        </div>
    </section>
    <!-- DOCUMENTS -->

    <!-- PARTNERS -->
    <section class="section-100 columns">
        <div class="section-title">
            <h2>ПАРТНЕРЫ ПРОЕКТА "ПЕРЕГОВОРНЫЕ ИГРЫ"</h2>
        </div>

        <div class="partners-team-container">
            @foreach ($partners as $partner)
                <a href="{{ $partner->url }}" target="_blank">
                    <div class="partners-team-item">
                        <div class="partners-team-image">
                            <img data-src="/images/partners/{{ $partner->number }}.png" class="img-responsive lazy" alt="">
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

    </section>
    <!-- LOGO AND COACHES -->

    <section class="section-100 columns">
                <div class="section-title">
                    <h2>РЕЗИДЕНТЫ ПРОЕКТА "ПЕРЕГОВОРНЫЕ ИГРЫ"</h2>
                </div>

                <div class="partners-team-container">
                    <div class="partners-team-item">
                        <h3>Шишкина Марина</h3>
                        <p>Москва и Московская область</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Лебедева Светлана</h3>
                        <p>Омск</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Гуринов Вячеслав</h3>
                        <p>Омск</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Порохова Елена</h3>
                        <p>Санкт-Петербург</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Сафонова Валентина</h3>
                        <p>Сибирский ФО</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Мударисов Энвер</h3>
                        <p>Томск</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Гильдия риэлторов Черноземья</h3>
                        <p>Воронеж</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Стульев Дмитрий</h3>
                        <p>Астрахань</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Плотников Дмитрий</h3>
                        <p>Астрахань</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Сербин Антон</h3>
                        <p>Москва</p>
                    </div>

                    <div class="partners-team-item">
                        <h3>Шелевер Светлана</h3>
                        <p>Калининград</p>
                    </div>

                </div>
    </section>
    <!-- PARTNERS -->

    <!-- ABOUT -->
    <section id="about">

        <div class="trans-container">
            <div class="col-trans">
                <div class="about-info">
                    <h2>ПРОЕКТ «ПЕРЕГОВОРНЫЕ ИГРЫ» - Это разнообразный формат мероприятий:</h2>

                    <div class="fcap">
                        <i class="fa fa-users"></i>
                        <span><b>Подготовка и проведение соревнований</b> лучших переговорщиков в любой сфере бизнеса (командные и индивидуальные)</span>
                    </div>

                    <div class="fcap">
                        <i class="fa fa-certificate"></i>
                        <span><b>Семинары и мастер-классы</b> от авторов с уникальной программой для неограниченного количества слушателей</span>
                    </div>

                    <div class="fcap">
                        <i class="fa fa-bar-chart-o"></i>
                        <span><b>Камерные тренинги</b> для отдельных компаний с глубокой отработкой ролевых ситуаций</span>
                    </div>

                    <div class="fcap bttn">
                        <button class="section-btn" onclick="window.open('https://www.youtube.com/@user-js8vp2dj2y/featured','_blank')">Видео о Проекте</button><br>
                    </div>

                    <div class="fcap bttn">
                        <button class="section-btn" onclick="window.open('https://www.youtube.com/watch?v=5q-D_3xXlOM','_blank')">Презентация Проекта</button>
                    </div>

                </div>
            </div>

            <div class="col-trans">
                <div class="about-info">
                    <h2>Свяжитесь с нами</h2>
                </div>
                <div class="my-form">
                    <form action="post-form.php" class="contact-form" method="post">
                        <div class="input-box">
                            <input type="text" name="user_name" placeholder="*Имя" minlength="3" maxlength="50" pattern="[a-zA-Zа-яА-Я]{2,}\s?[a-zA-Zа-яА-Я]{0,}" required />
                        </div>
                        <div class="input-box">
                            <input type="email" inputmode="email" name="user_email" placeholder="Email-адрес" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" />
                        </div>
                        <div class="input-box">
                            <input type="tel" inputmode="tel" name="user_phone" placeholder="*Номер телефона" maxlength="20" pattern="\+?[0-9]?\s?\(?[0-9]{0,4}\)?\s?[0-9]{6,15}" required />
                        </div>
                        <div class="input-box-h">
                            <input name="theme" type="hidden" value="Заявка с главной - Свяжитесь с нами" />
                        </div>
                        <div class="my-button">
                            <input type="submit" value="Отправить">
                        </div>
                        <p>Нажимая кнопку "Отправить" вы выражаете<br>своё согласие на обработку персональных данных.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->

@endsection

@push('js')
  <!-- SCRIPTS -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/lazyload.js"></script>
@endpush
