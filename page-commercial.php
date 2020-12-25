<?
/*
Template Name: Commercial
*/
?>
<?
get_header();
?>

<div class="section">
    <h2 class="page_title">UZŅĒMĒJIEM</h2>

    <h1 class="section about">Ja ticat labākas pasaules attīstībai un vēlaties piedalīties starptautisku ideju realizēšanā,
        tad priecāsimies ar Jums iepazīties.</h1>
</div>


<div class="section contact-us">
    <h2>PALĪDZI ĪSTENOT SAPNI!</h2>

    <form action="" method="">
        <div class="d-flex justify-content-between align-items-center">
            <input class='half' type="text" name="name" placeholder="Vārds, Uzvārds*" required>
            <input class='half' type="email" name="email" placeholder="E-pasts*" required>
        </div>

        <input type="text" name="company" placeholder="Uzņēmuma nosaukums*" required>
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


  <?
  get_footer();
  ?>