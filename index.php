<?
get_header();
?>



        <div class="section video-container">
            <img class='video-thumb' src="<? the_field('present_video_image'); ?>" alt="Video thumbnail">
            <a  class='play-btn' data-fancybox="gallery" href="https://www.youtube.com/embed/1PalAURGxtM"><img src="<? echo bloginfo('template_url');?>/assets/img/play-button.svg" alt="Play video"></a>
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

        <form action="#" method="post" class="form__body" id="form">

        // Hidden Required Fields
        		<input type="hidden" name="project_name" value="Site Name">
        		<input type="hidden" name="admin_email" value="admin@mail.com">
        		<input type="hidden" name="form_subject" value="Form Subject">
        // END Hidden Required Fields


                <div class="d-flex justify-content-between align-items-center">
                   <input class='form__input' type="text" name="Name" placeholder="Vārds, Uzvārds*" required>
                   <input class='form__input' type="email" name="E-mail" placeholder="E-pasts*" required>
               </div>

               <input class='form__input' type="tel" name="Phone" placeholder="Telefons*" required>
               <textarea class='form__input' name="Message" placeholder="Jautājums, vai komentārs*" required></textarea>

               <div>* obligāti aizpildāmie lauki</div>

               <label for="formAgreement" class="checbox-container d-flex align-items-center">
                   <div>Piekrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un tiks saglabāti līdz brīdim, kamērtas būs nepieciešams.
                   </div>
                </label>
                   <input class="checkbox__label _req" type="checkbox" name="agreement" id="formAgreement">
                   <span class="checkmark"></span>


               <div class="btn-container">
                   <button class='btn form__button' type="submit">Sūtīt</button>
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