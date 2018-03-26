<div class="container">
		<div class="row">                  
			<h1 class="text-center">Bestuur je battlebot!</h1>
                        <div class="col-md-6">
                            <img  style="height: 300px; width: 400px; margin-top: 40px;"src="tpl/image/battlebotcontrols.jpg"/>
                            <p style=" margin-top: 40px;" id="control"></p>
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
                            
                            var xmlhttp = new XMLHttpRequest();

                            xmlhttp.onreadystatechange = function() {
                                if (xmlhttp.readyState == XMLHttpRequest.DONE) {
                                   if (xmlhttp.status == 200) {
                                       document.getElementById("meter").innerHTML = xmlhttp.responseText;
                                   }
                                   }
                            };
                            window.setInterval(function(){        
                                xmlhttp.open("GET", "lib/pages/speedmeter.php", true);
                                xmlhttp.send();
                            }, 1000);
                            </script>
                        </div>             
                        <div id="meter" class="col-md-6">                                                      
                           
                        </div>
		</div>
	</div>