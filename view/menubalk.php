
<link rel="stylesheet" href="view/homepage.css">

<img id="ronnie" src="view/images/Ronrb.png">

<a href='?action=spel' target="blank"><div class="Spel">raad het getal</div></a>
<a href='?action=loterij' target="blank"><div class="Loterij">loterij</div></a>




<?php
 if (isset($_SESSION['username'])){
    echo '<a href="?action=logout"><div class="Spel">log uit</div></a>';
    }
    else{
        echo '<a href="?action=login" target="blank"><div class="Spel">registreer/login</div></a>';
    }
?>