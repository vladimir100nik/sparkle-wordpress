<?
/*
Template Name: Ideja
*/
?>
<?
get_header();
?>

<div class="section">
    <h2 class="page_title">IDEJA</h2>

    <h1 class="section about">Juris Gogulis ir pasaules iedvesmots mākslinieks–horeogrāfs un režisors, kura ikdiena
        aizrit
        radot aizkustinošus un iedvesmojošus radošus projektus. Juris ir pārliecināts, ka ir vērts ticēt katram savam
        sapnim
        un censties to īstenot. Kā smejas pats - daudzu draugu sapņiem viņš tic vairāk, nekā viņi paši!</h1>
</div>


<div class="section main_foto">
    <p>“Kopš 3 gadu vecuma mani ir audzinājusi mamma, pēc viņas piemēra esmu sapratis, cik sieviete ir spēcīga un
        varoša. Vēlos atlīdzināt un izveidot platformu, kurā satikties un palīdzēt cilvēkiem piepildīt savus
        sapņus.”</p>
    <!--    <img src="../img/juris_gogulis.jpg" alt="Juris Gogulis">-->

</div>

<div class="section opinion">

    <ul id="slider">
        <li class="slide visible">
        <h2>Ken Ludden </h2>
            <h3>Director, Margot Fonteyn Academy of Ballet</h3>
           <p>
            For it is Juris work that is the
                          light the human race needs so badly these days. His vision is inspired and talent is beyond measure.
           </p>
        </li>
        <li class="slide ">
                <h2>Voldemārs Brēdiķis</h2>
                    <h3>Managing partner at commercialization Reactor Fund, enterpreneur, angel investor</h3>
                   <p>
                   Juris has an inspiring drive and healthy ambition on top of human oriented person with amazing combination of creativity and abitlity to focus.</p>
                </li>
        <li class="slide ">
                <h2>Regīna Kaupuža </h2>
                    <h3>LNOB baleta pedagoģe, JVLMA horeogrāfijas katedras docente</h3>
                   <p>Juris Gogulis ir ļoti radoša un uzņēmīga personība ar nezūdošo optimismu un gaišu prātu. Jaunu un galvenais drosmīgu ideju realizētājs!</p>
                </li>
    </ul>
    <div class="slider_btn">
        <button id="prev"><img src="<? the_field('arrow'); ?>" alt="prev"></button>
        <button id="next"><img src="<? the_field('arrow'); ?>" alt="next"></button>
    </div>

</div>

<?
get_footer();
?>