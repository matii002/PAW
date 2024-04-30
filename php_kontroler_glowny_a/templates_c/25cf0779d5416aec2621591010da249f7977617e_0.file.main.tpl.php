<?php
/* Smarty version 4.5.1, created on 2024-04-18 19:09:24
  from 'C:\xampp\htdocs\php_zajecia\php_kontroler_glowny_a\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_662153c49e2c80_82988594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25cf0779d5416aec2621591010da249f7977617e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_zajecia\\php_kontroler_glowny_a\\templates\\main.tpl',
      1 => 1711965276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662153c49e2c80_82988594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css"/></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <span class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/logo.svg" alt="logo" /></span>
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
                <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/pic01.jpg" alt="Nie działa?" /></span>
            </div>
        </section>

        <!-- Kalkulator kredytowy -->
        <section id="first" class="main special">
            <header class="major">
                <h2>Oblicz ratę kredytu:</h2>
            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_274449629662153c49e2509_69327672', 'content');
?>

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
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_274449629662153c49e2509_69327672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_274449629662153c49e2509_69327672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
wyświetlamy plik rozszerzający<?php
}
}
/* {/block 'content'} */
}
