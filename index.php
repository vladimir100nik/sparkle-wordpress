<?
get_header();
?>



        <div class="section video-container">
            <img class='video-thumb' src="<? the_field('present_video_image'); ?>" alt="Video thumbnail">
            <a  class='play-btn' data-fancybox="gallery" href="https://www.youtube.com/watch?v=0Z5_mgxoXeM"><img src="<? echo bloginfo('template_url');?>/assets/img/play-button.svg" alt="Play video"></a>
        </div>
    <h1 class="section about">
    <?
    the_field('about');
    ?>
    </h1>


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


  <?
  get_footer();
  ?>