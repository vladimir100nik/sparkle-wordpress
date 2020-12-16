<?
/*
Template Name: Support
*/
?>

<?
get_header();
?>

<div class="section">
    <h2 class="page_title">SAPŅUS ATBALSTA</h2>

    <h1 class="section about">Sadarbības partneri ir uzņēmumi, kuri savā preču vai pakalpojumu ikdienā ir integrējuši
        SparkleHeart zīmolu un dala ar to konkrētu daļu savu ienākumu.</h1>

    <div class="supporters_list">
        <div class="list">
            <div class="list_item">
                <p>Uzņemuma atrašanas vieta</p>
                <form action="">
                    <select name="location" id="loc">
                        <option value="Izvēlies" selected>Izvēlies</option>
                        <option value="Jurmala">Jurmala</option>
                        <option value="Daugavpils">Daugavpils</option>
                        <option value="Venspils">Venspils</option>
                        <option value="Liepaja">Liepaja</option>
                    </select>
                </form>
            </div>
            <div class="list_item">
                <p>Uzņēmuma veids</p>
                <form action="">
                    <select name="location" id="location">
                        <option value="Informācijas tehnoloģijas" selected>Izvēlies</option>
                        <option value="Finance">Finance</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Transport">Transport</option>
                        <option value="Food">IT</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>

<div>
<? echo do_shortcode('[wpgmza id="1"]'); ?>
</div>




  <?
  get_footer();
  ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDszYnXADo49beZSxaUrpg1eMsHluuo3do"></script>