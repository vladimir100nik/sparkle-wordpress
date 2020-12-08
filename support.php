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

<!--<div id="map"></div>-->


<!--<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>-->

<div class="section"><div id="map"><iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d123131.41568295624!2d24.03203890629631!3d56.94516571402415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2slv!4v1603474630207!5m2!1sru!2slv" width="100%"height="650px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div></div>

<!--<div class="section karte">-->
<!--    <img src="../img/Karte.png" alt="Maps">-->
<!--</div>-->


  <?
  get_footer();
  ?>