<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&display=swap&subset=latin-ext" rel="stylesheet">
</head>

<body>
    <section class="section">
        <header class="header">
            <video autoplay muted loop src="img/slider2.mp4"></video>
        </header>
        <!-- <div class="fix"> -->
        <div class="navbar">
            <div class="logo">KBike</div>
            <div class="links">
                <ul>
                    <li><a href="#" class="About box">O nas</a></li>
                    <li><a href="#" class="Bikes box">Rowery</a</li>
                    <li><a href="#" class="Prices box">Cennik</a></li>
                    <li><a href="#" class="Contact box">Kontakt</a></li>
                </ul>
            </div>
        </div>
        <!-- <header class="header"></header> -->
        <article class="color">
            <h2 class="title">Rowery górskie</h2>
            <div class="Article">
                <img class="MountainBike" src="img/kross_hexagon.jpg" alt="">
                <p>Chcesz wreszcie odpocząć od miejskiego zgiełku i wyruszyć na samotną przejażdżkę po górskich
                    szlakach? To świetna
                    okazja by wypożyczyć jeden z wielu naszych rowerów górskich i wykorzystać cały jego potencjał! Tylko
                    w KBike znajdziesz tak wiele markowych górali, które sprostają nawet najtrudniejszym trasom.
                    Pamiętaj tylko o wypełnieniu formularza kontaktowego, gdzie dopasujesz rower do siebie i spraw, by
                    Twój wypoczynek stał się niesamowitą przygodą!</p>
                    <div></div>
            </div>
            <table>
                <tr>
                    <th>Rowery</th>
                    <th>6h</th>
                    <th>24h</th>
                </tr>
                    <?php
                        include("select.php");
                    ?>
            </table>

            <h2 class="title SecTitle">Rowery miejskie</h2>
            <div class="Article ArticleSecond">
                <img class="CityBike" src="img/le grand.jpg" alt="">
                <p>A może masz ochotę na przejażdżkę z rodziną po miejskim parku? To może być świetna frajda,
                    szczególnie podczas niedzielnego popołudnia. Możesz także dojeżdzać rowerem do pracy, lub na
                    uczelnię. Każde miasto dba o miłośników dwóch pedałów i rozbudowuje swoje ścieżki rowerowe, dzięki
                    czemu dostaniesz się nawet na drugi koniec miasta. Nie musisz już stać w korkach, czy w
                    zatłoczonym autobusie! Nie wahaj się i skorzystaj z naszych atrakcyjnych ofert.</p>
            </div>
            <h2 class="title">Rowery szosowe</h2>
            <div class="Article ArticleThird">
                <img class="MountainBike" src="img/specialized_tarmac2.jpg" alt="">
                <p>Masz ochotę poczuć się jak profesjonalny kolarz szosowy? W naszej ofercie znajdziesz sprzęt firmy
                    Specialized, która składa każdy rower w dbałości o nawet najmiejszy detal. Załóż strój i ruszaj w
                    drogę nie obawiając się o swój budżet. W naszym sklepie możesz w każdej chwili przedłużyć czas
                    wypożyczenia roweru. Zadbaj o swoją formę i wykręć jak najlepszy czas na jednej z naszych szosówek!
                </p>
            </div>
            <div></div>
            <div></div>
            <form class="form" action="connect.php" method="POST">
                <h1 class="FormHeader">Formularz kontaktowy</h1>
                <div class="form__content">
                    <div class="form__field">
                        <input type="text" class="form__field__input" name="Imie" placeholder=" "
                            pattern="[A-Za-z]{2,99}" required>
                        <label for="" class="form__field__label">Imię</label>
                        <p class="FormFieldError">Czy Twoje imię jest prawidłowe?</p>
                        <div class="FormFieldStateIcon"></div>
                    </div>
                    <div class="form__field">
                        <input type="text" class="form__field__input" name="Nazwisko" placeholder=" "
                            pattern="[A-Za-z]{2,99}" required>
                        <label for="" class="form__field__label">Nazwisko</label>
                        <p class="FormFieldError">Czy Twoje nazwisko jest prawidłowe?</p>
                        <div class="FormFieldStateIcon"></div>
                    </div>
                    <div class="form__field">
                        <input type="number" class="form__field__input" name="Wiek" placeholder=" " min="1" max="200"
                            required>
                        <label for="" class="form__field__label">Wiek</label>
                        <p class="FormFieldError">Czy Twój wiek jest prawidłowy?</p>
                        <div class="FormFieldStateIcon"></div>
                    </div>
                    <div class="form__field">
                        <input type="number" class="form__field__input" name="Telefon" placeholder=" " min="100000000"
                            max="999999999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                        <label for="" class="form__field__label">Podaj numer telefonu</label>
                        <p class="FormFieldError">Czy numer telefonu jest prawidłowy?</p>
                        <div class="FormFieldStateIcon"></div>
                    </div>
                    <div class="form__field">
                        <input type="email" pattern="^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$"
                            class="form__field__input" name="Email" placeholder=" " required>
                        <label for="" class="form__field__label">Adres Email</label>
                        <p class="FormFieldError">Czy twój adres E-mail jest prawidłowy?</p>
                        <div class="FormFieldStateIcon"></div>
                    </div>
                    <div class="form__field">
                        <select type="text" class="form__field__input" name="Rower" placeholder=" "
                            pattern="[A-Za-z]{2,99}" required>
                            <option> Kross
                            <option> Specialized
                            <option> Merida
                            <option> Kellys
                            <option> Le Grand
                            <option> Romet
                            <option> Alpina
                        </select>
                        <!-- <label for="" class="form__field__label">Podaj nazwę roweru</label> -->
                        <p class="FormFieldError">Czy nazwa roweru jest prawidłowa?</p>
                        <div class="FormFieldStateIcon"></div>
                    </div>
                    <div class="form__button">
                        <button type="submit">Wyślij</button>
                    </div>
                </div>
            </form>
            <footer class="footer">&copy; Kamil Borkowski<br>2019</footer>
        </article>
    </section>
</body>

</html>