<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparkle Heart</title>
    <link rel="shortcut icon" href="<? echo bloginfo('template_url');?>/assets/img/favicon.ico" type="image/x-icon">

    <?
    wp_head();
    ?>

</head>

<body>
    <header>
        <nav>
            <img src="<? echo bloginfo('template_url');?>/assets/img/logo.jpg" alt="Sparkle Heart Logo">

            <div class='menu-btn'>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul id='menu'>
                <li><a href="assets/pages/ideja.html">Ideja</a></li>
                <li><a href="assets/pages/dreams.html">Piesaki Sapni</a></li>
                <li><a href="assets/pages/commercial.html">Uzņēmējiem</a></li>
                <li><a href="assets/pages/dreambank.html">Sapņu banka</a></li>
                <li><a href="assets/pages/support.html">Sapņus atbalsta</a></li>
                <li><a href="assets/pages/99stories.html">99 Iedvesmas stāsti</a></li>
                <li><a href="#">LV</a></li>
            </ul>

            <div class="menu-overlay"></div>
        </nav>

        <div class="section video-container">
            <img class='video-thumb' src="<? echo bloginfo('template_url');?>/assets/img/video-thumb.svg" alt="Video thumbnail">
            <img class='play-btn' src="<? echo bloginfo('template_url');?>/assets/img/play-button.svg" alt="Play video">
        </div>
    </header>


    <h1 class="section about">SparkleHeart ir biedrība, kas radīta, lai palīdzētu cilvēkiem piepildīt pat pārdrošākos
        sapņus. Šeit satiekas sapņotāji un viņu atbalstītāji - uzņēmumi, kas sniedz palīdzīgu roku, lai kopā pasauli
        padarītu par labāku vietu mums visiem.Mēs esam gatavi palīdzēt Tev piepildīt sapni. Kā pamats iedvesmai - tiek
        radīti arī 99 stāsti par Latvijas sievietēm.</h1>


    <div class="section gallery-container">
        <div class="gallery">
            <div>
                <img src="<? echo bloginfo('template_url');?>/assets/img/gallery-1.jpg" alt="Foto">
            </div>

            <div class="last_item">
                <img src="<? echo bloginfo('template_url');?>/assets/img/gallery-2.jpg" alt="Foto">
            </div>

            <div class="first_item">
                <div>
                    <img src="<? echo bloginfo('template_url');?>/assets/img/gallery-3.jpg" alt="Foto">
                </div>

                <div>
                    <img src="<? echo bloginfo('template_url');?>/assets/img/gallery-4.jpg" alt="Foto">
                </div>
            </div>

            <div class="second_item">
                <img src="<? echo bloginfo('template_url');?>/assets/img/gallery-5.jpg" alt="Foto">
            </div>
        </div>
    </div>


    <div class="section dream">

        <div>
            <h2>VĒLIES PIEPILDĪT SAVU SAPNI?</h2>
            <a class='btn' href="#">Sapņotājiem</a>
        </div>

        <div>
            <h2>VĒLIES PALĪDZĒT KĀDĀM PIEPILDĪT SAPNI?</h2>
            <a class='btn' href="#">Uzņēmējiem</a>
        </div>
    </div>


    <div class="section contact-us">
        <h2>SAZINĀTIES AR MUMS</h2>

        <form action="" method="">
            <div class="d-flex justify-content-between align-items-center">
                <input class='half' type="text" name="name" placeholder="Vārds, Uzvārds*" required>
                <input class='half' type="email" name="email" placeholder="E-pasts*" required>
            </div>

            <input type="tel" name="phone" placeholder="Telefons*" required>
            <textarea name="message" placeholder="Jautājums, vai komentārs*" required></textarea>

            <div>* obligāti aizpildāmie lauki</div>

            <label class="checbox-container d-flex align-items-center">
                <div>Piekrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un tiks saglabāti līdz brīdim, kamēr
                    tas būs nepieciešams.
                </div>
                <input type="checkbox" name="terms" id="terms">
                <span class="checkmark"></span>
            </label>

            <div class="btn-container">
                <button class='btn' type="submit">Sūtīt</button>
            </div>
        </form>
    </div>


    <div class="supporters">
        <div class="supporters_items">
            <h2>ATBALSTĪTĀJI</h2>

            <ul>
                <li><img src="<? echo bloginfo('template_url');?>/assets/img/clients-logo-1.png" alt="logo"></li>
                <li><img src="<? echo bloginfo('template_url');?>/assets/img/clients-logo-2.png" alt="sem"></li>
                <li><img src="<? echo bloginfo('template_url');?>/assets/img/clients-logo-3.png" alt="logo"></li>
                <li><img src="<? echo bloginfo('template_url');?>/assets/img/clients-logo-4.png" alt="logo"></li>
            </ul>
        </div>
    </div>


    <footer>
        <div class="footer_idea">
            <div class="footer-top">
                <div class="footer-col">
                    <a href="/">
                        <img class="logo_footer" src="<? echo bloginfo('template_url');?>/assets/img/logo-footer.png" alt="Sparkle Footer Logo">
                    </a>
                    <h2 class="full_scr_hidden">Juris Gogulis</h2>
                </div>

                <div class="footer-col footer_links">
                    <ul>
                        <li><a href="#">Ideja</a></li>
                        <li><a href="#">Piesaki Sapni</a></li>
                        <li><a href="#">Uzņēmējiem</a></li>
                        <li><a href="#">Sapņu banka</a></li>
                        <li><a href="#">Sapņus atbalsta</a></li>
                        <li><a href="#">Iedvesmas stāsti</a></li>
                    </ul>
                </div>

                <div class="footer-col rekv_hidden">

                    <div class="rekv_hidden">
                        <h2>Biedrība SparkleHeart</h2>

                        <div>Reģistrācijas nr. 40008293119</div>
                        <div>Banka: SWEDBANK A/S</div>
                        <div>LV52HABA0551047652465</div>
                    </div>

                </div>

                <div class="footer-col">
                    <div class="contacts">
                        <h2>Juris Gogulis</h2><br>
                        <div>juris.gogulis@sparkleheart.org</div>
                        <div>+37126890034</div>
                        <div>Biķernieku iela 24a - 5, LV-1006</div>
                        <a class="full_scr_hidden" id="show_rekv">Skatīt rekvizītus</a>
                    </div>

                    <div class="social-links">
                        <a href="https://facebook.com">
                            <img src="<? echo bloginfo('template_url');?>/assets/img/facebook-icon.svg" alt="facebook">
                        </a>

                        <a href="https://instagram.com">
                            <img src="<? echo bloginfo('template_url');?>/assets/img/instagram-icon.svg" alt="instagram">
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyrights">
                    <div>© SparkleHeart 2020.</div>
                    <div>Visas tiesības aizsargātas.</div>
                </div>

                <div>Privātuma politika</div>
            </div>
        </div>
    </footer>

    <div class="scroll-to-top"></div>

    

    <?
    wp_footer();
    ?>
</body>

</html>