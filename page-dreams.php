<?
/*
Template Name: Dreams
*/
?>

<?
get_header();
?>

<div class="section">
    <h2 class="page_title">PIESAKI SAPNI</h2>

    <h1 class="section about">Tev ir iespēja pieteikt personīgo vai profesionālo sapni.</h1>
</div>


<div class="section dreams">
    <div class="left_block">
        <img src="<? the_field('rabbit_img');?>" alt="rabbit">
        <h2>PERSONĪGAIS SAPNIS</h2>
        <p>Bērnības nepiepildītie sapņi... No sev piederoša svaigi spiestas sulas bāra uz Tērbatas ielas līdz iespējai
            satikties ar Džekiju Čanu.</p>
        <button class="btn">Piesaki sapni</button>
    </div>
    <div class="right_block">
        <img src="<? the_field('ballon_img');?>" alt="ballon">
        <h2>PROFESIONĀLAIS SAPNIS</h2>
        <p>Sapnis vai ideja, kura ir balstīta uz reģiona, pasaules vai cilvēku attīstību 4 virzienos - kultūra,
            izglītība, zinātne, ģimene jeb sociālā vide. Tā ir iespēja attīstīt ideju, kas uzlabotu ikdienas dzīves
            kvalitāti vai atrisinātu vietēja vai starptautiska līmeņa problēmu. Pastāsti, kāpēc Tev tas ir tik
            nozīmīgi?</p>
        <button class="btn">Piesaki sapni</button>
    </div>


</div>

<div class="section gallery-container">
    <div class="gallery">
        <div>
            <img src="../img/dream_left.jpg" alt="">
        </div>

        <div>
            <div>
                <img src="../img/dream_centr_up.jpg" alt="">
            </div>
            <div>
                <img src="../img/dream_centr_down.jpg" alt="">
            </div>
        </div>

        <div>
            <img src="../img/dream_centr_right.jpg" alt="">
        </div>

        <div>
            <img src="../img/dream-right.jpg" alt="">
        </div>
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
            <span>Piekrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un tiks saglabāti līdz brīdim, kamēr
                tas būs nepieciešams.
            </span>
            <input type="checkbox" name="terms" id="terms">
            <span class="checkmark"></span>
        </label>

        <div class="btn-container">
            <button class='btn' type="submit">Sūtīt</button>
        </div>
    </form>
</div>

  <?
  get_footer();
  ?>