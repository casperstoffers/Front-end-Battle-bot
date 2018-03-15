<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <div class="container">
		<div class="row">
			<h1 class="text-center">Bestuur je battlebot!</h1>
                        <img style="height: 500px; width: 500px;" src="tpl/image/battlebotcontrols.png"/>
                        <p style="margin-left: 70px;" id="control"></p>
                        <script>
                        document.addEventListener('keydown', function(event) {
                        if(event.keyCode == 87) {
                            document.getElementById('control').innerHTML = "Je gaat vooruit";
                        }
                        else if(event.keyCode == 65) {
                            document.getElementById('control').innerHTML = "Je gaat linksaf";
                        }
                        else if(event.keyCode == 83) {
                            document.getElementById('control').innerHTML = "Je gaat achteruit";
                        }
                        else if(event.keyCode == 68) {
                            document.getElementById('control').innerHTML = "Je gaat rechtsaf";
                        }
                        else if(event.keyCode == 81) {
                            document.getElementById('control').innerHTML = "Special 1";
                        }
                        else if(event.keyCode == 69) {
                            document.getElementById('control').innerHTML = "Special 2";
                        }
                        else {
                            document.getElementById('control').innerHTML = "Geen geldig command";
                        }
                            
                        });
                        </script>
                        <?php
                            $value = rand(1, 40);
                            echo $value;
                            if($value >= 1 && $value <= 10)
                            {
                                $volume = "default";
                            }
                            if($value >= 11 && $value <= 20)
                            {
                                $volume = "groen";
                            }
                            if($value >= 21 && $value <= 30)
                            {
                                $volume = "geel";
                            }
                            if($value >= 31 && $value <= 40)
                            {
                                $volume = "rood";
                            }
                        ?>
                        <img style="height: 500px; width: 700px; margin: 0;" src="tpl/image/volume<?php echo $volume?>.png"/>
                        
		</div>
	</div>