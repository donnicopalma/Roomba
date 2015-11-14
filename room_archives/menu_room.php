<div class="menuContent">
    <a class="slider"><img alt="" id="bot" src="img/arrow_bottom.png"></a>
    <ul id="nav">
        <li>
            <ul id="1">
                	<?php
						$mygallery = new gallery();
						$mygallery->loadFolder('objetos/muebles');
						$mygallery->show(70, 10);
					?>
            </ul>
            <a href="#" class="sub" tabindex="1"><img src="img/t2.png" />Muebles</a>
        </li>
        <li>
            <ul id="2">
					<?php
						$mygallery = new gallery();
						$mygallery->loadFolder('objetos/electronica/televisores');
						$mygallery->show(70, 10);
					?>
            </ul>
            <a href="#" class="sub" tabindex="1"><img src="img/t3.png" />Electro</a>
        </li>
    </ul>
</div>
