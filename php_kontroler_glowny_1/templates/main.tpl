<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css"/></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <span class="logo"><img src="{$conf->app_root}/images/logo.svg" alt="logo" /></span>
        <h1>Witaj, w kalkulatorze online!</h1>
        <p>Korzystaj z pełni możliwośći kalkulatora, za darmo!<br />
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="#intro" class="active">Opis aplikacji</a></li>
            <li><a href="#first">Kalkulator kredytowy</a></li>
            <li><a href="#footer">Kontakt</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Opis aplikacji -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Kalkulator kredytowy</h2>
                    </header>
                    <p>Kalkulator online, stworzony sostał z myślą o użytkownikach użądzeń mobilnych. Dbamy o najmniejsze szczegóły, które ułatwiają Ci jego obsługę.</p>
                    <ul class="actions">
                        <li><a href="generic.php" class="button">Czytaj dalej...</a></li>
                    </ul>
                </div>
                <span class="image"><img src="{$conf->app_root}/images/pic01.jpg" alt="Nie działa?" /></span>
            </div>
        </section>

        <!-- Kalkulator kredytowy -->
        <section id="first" class="main special">
            <header class="major">
                <h2>Oblicz ratę kredytu:</h2>
            </header>
            {block name=content}wyświetlamy plik rozszerzający{/block}
        </section>
    </div>
</div>
<!-- Footer -->
<footer id="footer">
    <section>
        <h2>O autorze</h2>
        <p>Studiuję informatykę na Uniwersytecie Śląskim w Katowicach. Jestem na specjaloności: Programowanie Aplikacji Webowych.</p>
        <ul class="actions">
            <li><a href="generic.php" class="button">Czytaj dalej...</a></li>
        </ul>
    </section>
    <section>
        <h2>Dane kontaktowe</h2>
        <dl class="alt">
            <dt>Adres</dt>
            <dd>Sosnowiec &bull; Pogoń &bull; Poland</dd>
            <dt>Telefon</dt>
            <dd>794-000-111</dd>
            <dt>Email</dt>
            <dd><a href="#">mateuszproszowski02@gmail.com</a></dd>
        </dl>
        <ul class="icons">
            <li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
            <li><a href="https://github.com/matii002/PAW" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
        </ul>
    </section>
    <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
</footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>