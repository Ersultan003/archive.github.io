<?php
error_reporting(0);
ini_set("display_errors", 0);
include_once "class.crm.php";
$settings = CRM::getLandingSettings();
if (isset($_GET['cpa_form'])) {
    $crm = new CRM();
    $crm->landingSendOrder();
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laminary</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__left">
                    <div class="header__picture">
                        <img src="images/dest/item.png" alt="">
                    </div>
                    <form method="POST" enctype="application/x-www-form-urlencoded" action="/?referer=&amp;cpa_form=1"
                        onsubmit="return cpaFormValidation(this)">
                        <div class="cpa-form-group cpa-form-group-odd cpa-form-group-first cpa-wrapper-field-country">
                            <label class="cpa-control-label">Страна:</label><select
                                class="cpa-group-field cpa-select-country" name="country">
                                <option selected="true" value="kz">Казахстан</option>
                                <option value="kg">Киргизия</option>
                            </select></div>
                        <div class="cpa-form-group cpa-form-group-even cpa-wrapper-field-fio">
                            <label class="cpa-control-label">ФИО:</label><input class="cpa-group-field cpa-input-fio"
                                name="fio" placeholder="Ваше имя">
                        </div>
                        <div class="cpa-form-group cpa-form-group-odd cpa-wrapper-field-phone">
                            <label class="cpa-control-label">Телефон:</label><input
                                class="cpa-group-field cpa-input-phone" name="phone" placeholder="Ваш телефон">
                        </div>
                        <div class="cpa-form-group cpa-form-group-even cpa-wrapper-field-total">
                            <label class="cpa-control-label cpa-control-total">Итого:</label><span
                                class="cpa-control-amount">6490.00 тнг</span></div>
                        <div class="cpa-form-group cpa-form-group-odd cpa-form-group-last cpa-wrapper-field-submit">
                            <button class="cpa-input-submit" type="submit"
                                onclick="yaCounter45713811.reachGoal('ORDER'); return true;">ПОЛУЧИТЬ
                                СКИДКУ</button><input type="hidden" name="offer" value="laminary_mask"><input
                                type="hidden" name="vendor" value=""><input type="hidden" name="price" value=""><input
                                type="hidden" name="campaign_default" value="aAcLzqZl"></div>
                        <p class="header__receipt">Доставка по Казахстану <br> Оплата при получений.</p>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__list">
                        <h2>Laminary</h2>

                        <h5>КОЛЛАГЕНОВЫЙ КРЕМ ДЛЯ ЛИЦА</h5>

                        <h4>КРЕМ НА ОСНОВЕ СЕМЯН
                            МОРСКИХ ВОДОРОСЛЕЙ</h4>
                        <h3>Забудь о тональном
                            креме навсегда!</h3>
                        <p>«Ламинарий» лучший выбор
                            для устранения проявлений
                            акне и его последствий. </p>

                        <div class="header__prices">
                            <span class="newPrice">5 990 тг</span>
                        </div>
                        <div class="toOrder">
                            <a href="#footer" class="btn">
                                Заказать
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="b2">
        <div class="b2__top">
            <h2>Средство #1 от прыщей! </h2>
        </div>
        <div class="container">
            <div class="b2__cards">
                <div class="b2__card">
                    <span>1</span>
                    <img src="images/dest/b2item1.png" alt="">
                    <p>лечит прыщи и угри</p>
                </div>
                <div class="b2__card">
                    <span>2</span>
                    <img src="images/dest/b2item2.png" alt="">
                    <p>нормализует выработку себума сальными
                        железами</p>
                </div>
                <div class="b2__card">
                    <span>3</span>
                    <img src="images/dest/b2item3.png" alt="">
                    <p>убирает пигментные
                        пятна</p>
                </div>
                <div class="b2__card">
                    <span>4</span>
                    <img src="images/dest/b2item4.png" alt="">
                    <p>осветляет кожу</p>
                </div>
                <div class="b2__card">
                    <span>5</span>
                    <img src="images/dest/b2item5.png" alt="">
                    <p>борется с признаками старения кожи</p>
                </div>
                <div class="b2__card">
                    <span>6</span>
                    <img src="images/dest/b2item6.png" alt="">
                    <p>стимулирует микроциркуляцию
                        для восстановления обменных процессов в зоне нанесения</p>
                </div>
            </div>
        </div>
    </section>
    <section class="b3">
        <div class="b3__container">
            <h2>Ламинарий – личный косметолог
                каждой девушки </h2>
            <p>
                - начинает действовать с третьего дня применения
            </p>
            <p>- подходит для всех типов кожи </p>
            <p>- прост в использовании</p>
            <p>- 98% женщин уже забыли об акне</p>
        </div>
    </section>
    <section class="b4">
        <div class="container">
            <div class="b4__wrapper">
                <div class="b4__list">
                    <h2>Как
                        использовать? </h2>
                    <h3>2 раза в день: утром и вечером. </h3>
                    <p>Предварительно очистив кожу от макияжа.</p>
                    <p>Крем впитывается мгновенно.</p>
                    <p>Успокаивает воспаленные участки.</p>
                    <p>Охлаждает и увлажняет кожу лица.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="b5">
        <div class="container">
            <div class="b5__header">
                <h2>Крем Ламинарий не имеет побочных эффектов, не имеет никаких противопоказаний. Состоит из натуральных
                    компонентов.</h2>
            </div>
            <div class="b5__cards">
                <div class="b5__card">
                    <img src="images/dest/b5item1.png" alt="">
                    <h3>Бурая водоросль (Ascophyllum) </h3>
                    <p>содержит аминокислоту Омега-3 главный источник природного коллагена. </p>
                </div>
                <div class="b5__card">
                    <img src="images/dest/b5item2.png" alt="">
                    <h3>Ламинария </h3>
                    <p>содержит комплекс питательных витаминов: маннит, белковые вещества, минеральные соли, йод, калий,
                        кальций, витамин С, железо - способствует улучшению микроциркуляции крови
                        в слоях кожи и ее увлажнению. 
                    </p>
                </div>
                <div class="b5__card">
                    <img src="images/dest/b5item3.png" alt="">
                    <h3>Фукус (Fucus)  </h3>
                    <p>содержит альгиновую кислоту, оказывает лимфодренажный эффект, тонизируя и укрепляя кожу, очищая
                        от ороговевших слоев клеток и токсинов. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="b6">
        <div class="container">
            <h2>Эти люди уже избавились от проблем с кожей!</h2>
            <div class="b6__inner">
                <div class="b6__item">
                    <img class="b6__image" src="images/dest/b6item.png" alt="">
                    <h3>Рамина, 25 лет</h3>
                    <p>Боже, ламинарий - это находка всей моей жизни. Мне уже 25, а я не могла избавиться от
                        подростковых прыщей. К слову, это досталось от стороны матери. Там у всех проблемы с акне. Сразу
                        после первого применения краснота ушла. А через 3 недели, от прыщей были только маленький
                        "пипки"! Щадящий пилинг - и я идеальна!</p>
                </div>
                <div class="b6__item">
                    <img class="b6__image" src="images/dest/b6item2.png" alt="">
                    <h3>Аскат, 21 год</h3>
                    <p>Никак не мог спокойно общаться и завести знакомство с девушками из-за неровностей на коже.
                        Подростковые прыщи оставили след на моих щеках. Они сразу бросались на глаза. После курса
                        ламинарии, кожа восстановилась. Покраснения и рубцы исчезли. Я чувствую себя увереннее.</p>
                </div>
                <div class="b6__item">
                    <img class="b6__image" src="images/dest/b6item3.png" alt="">
                    <h3>Кристина, 42 года</h3>
                    <p>Моя дочь-подросток каждый день плакала от того, что прыщи не уходили с ее лица. Она сама девочка,
                        которая не остается без внимания мальчиков, но для нее это так важно. Ламинария очень
                        качественный продукт, явно он из натуральных компонентов, запах травы и водорослей уже
                        успокаивают. Дочь избавилась от прыщей и так рада, я вижу как она больше не стесняется себя.</p>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__left">
                    <img src="images/dest/item.png" alt="">
                </div>
                <div class="footer__right">
                    <h2>
                        Laminary
                    </h2>
                    <h3>КОЛЛАГЕНОВЫЙ КРЕМ ДЛЯ ЛИЦА</h3>
                    <p class="footer__descr">
                        ПО ВЫГОДНОЙ ЦЕНЕ!
                    </p>
                    <div class="footer__prices">
                        <span class="newPrice">5 990 тг</span>
                    </div>
                    <img src="images/dest/b4image.png" class="d-block d-lg-none" alt="">
                    <div class="form">
                        <p>Заполните поля ниже, <br> <strong> чтобы получить скидку 50%</strong></p>
                        <span class="cpa-form-wrapper"></span>
                    </div>
                    <p class="footer__receipt">Оплата курьеру при получении</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
</body>

<link type="text/css" rel="stylesheet" href="css/bootstrap-grid.min.css">
<!--<link type="text/css" rel="stylesheet" href="css/animate.css">-->
<!--<link type="text/css" rel="stylesheet" href="css/owl.carousel.css">-->
<link type="text/css" rel="stylesheet" href="css/styles.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--<script src="js/owl.carousel.js"></script>-->
<!--<script src="js/wow.min.js"></script>-->
<script src="js/main.js"></script>
<div id="blurb" style="text-align: center;"></div>
<script language="javascript">
    ! function (a, b) {
        var c = a.getElementsByTagName("head")[0],
            d = a.createElement("script"),
            e = function () {
                c.appendChild(d, c)
            },
            f = function (a) {
                return a.length > 0 ? location.search.length > 0 ? "?" + a + "&" + location.search.substr(1) : "?" + a :
                    location.search.length > 0 ? location.search : ""
            },
            g = "referer=" + document.referrer + "&cpa_form=1",
            h = "http://cpa.trafa.red/j2/laminary_mask/F1b6YIiy";
        d.type = "text/javascript", d.async = !0, d.src = h + f(g), e()
    }(document, window);
</script>

<script type="text/javascript">
    function cpaFormLoadedCallback() {
        $(".cpa-select-country").change(function () {
            var b = $(this).val();
            $(".newPrice").text(parseInt(options[b].price) + " " + options[b].price_currency_abbr_short);
            if (parseInt(options[b].price_old) > 0) {
                $(".oldPrice").text(parseInt(options[b].price_old) + " " + options[b]
                    .price_old_currency_abbr_short)
            } else {
                $(".oldPrice").text(parseInt(options[b].price * 2) + " " + options[b].price_currency_abbr_short)
            }
            $("#crm-requisites").html(options[b].requisites)
        });
        $(".cpa-input-fio").attr("placeholder", "Ваше имя");
        $(".cpa-input-phone").attr("placeholder", "Ваш телефон");
        $(".cpa-input-submit").html("ПОЛУЧИТЬ СКИДКУ").attr('onclick',
            "yaCounter45713811.reachGoal('ORDER'); return true;");
        var a = $(".cpa-form-wrapper:first .cpa-select-country").val();
        $(".newPrice").text(parseInt(options[a].price) + " " + options[a].price_currency_abbr_short);
        if (parseInt(options[a].price_old) > 0) {
            $(".oldPrice").text(parseInt(options[a].price_old) + " " + options[a].price_old_currency_abbr_short)
        } else {
            $(".oldPrice").text(parseInt(options[a].price * 2) + " " + options[a].price_currency_abbr_short)
        }
        $("#crm-requisites").html(options[a].requisites);
    };
</script>
<?php echo isset($settings["footer_code"]) && !empty($settings["footer_code"]) ? $settings["footer_code"] : ""; ?>

</html>