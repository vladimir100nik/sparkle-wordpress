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
                        <h2><? the_field('req_title', 2) ?></h2>
                        <div><? the_field('reg_number', 2) ?></div>
                        <div><? the_field('bank_name', 2) ?></div>
                        <div><? the_field('account_number', 2) ?></div>
                    </div>

                </div>

                <div class="footer-col">
                    <div class="contacts">
                        <h2><? the_field('contact_name', 2);?></h2><br>
                        <div><a href="mailto:juris.gogulis@sparkleheart.org"><? the_field('email', 2);?></a></div>
                        <div><a href="tel:+37126890034"><? the_field('phone_number', 2);?></a></div>
                        <div><? the_field('address', 2);?></div>

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

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <?
    wp_footer();
    ?>

</body>

</html>