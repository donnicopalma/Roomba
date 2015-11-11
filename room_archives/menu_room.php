<div class="menuContent">
    <a class="slider"><img alt="" id="bot" src="img/arrow_bottom.png"></a>
    <ul id="nav">
        <li>
            <ul id="1">
                	<?php
						$mygallery = new gallery();
						$mygallery->loadFolder('objetos/muebles');
						$mygallery->show(400, 60, 10);
					?>
            </ul>
            <a href="#" class="sub" tabindex="1"><img src="img/t2.png" />HTML/CSS</a>
        </li>
        <li>
            <ul id="2">
				<li id="<?php echo $id_userx; ?>" onclick="nuevo_elemento(this.id,this.title);" title="objetos/tele_sony1.png"><img src="img/tv.png" />TV Sony</li>
                <li id="<?php echo $id_userx; ?>" onclick="nuevo_elemento(this.id,this.title);" title="objetos/radio_sony.png"><img src="img/radio.png" />Radio Sony</li>
            </ul>
            <a href="#" class="sub" tabindex="1"><img src="img/t3.png" />Electro</a>
        </li>
    </ul>
</div>
