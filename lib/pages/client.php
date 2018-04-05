<div class="container">
		<div class="row">                  
			<h1 class="text-center">Bestuur je battlebot!</h1>
                        <div class="col-md-6">
                            <img  style="height: 300px; width: 400px; margin-top: 40px;"src="../../tpl/image/battlebotcontrols.jpg"/>
                            <p style=" margin-top: 40px;" id="control"></p>
                            <audio id="bigCar">
                                <source src="../../lib/audio/formula+1.mp3">
                            </audio>
                            <script> 
                            document.addEventListener('keyup', function(event) {
                            if(event.keyCode == 87 || event.keyCode == 65 || event.keyCode == 68){
                                document.getElementById('bigCar').pause();
                               
                            }                                
                            });                           
                            document.addEventListener('keydown', function(event) {
                                
                            if(event.keyCode == 87 || event.keyCode == 65 || event.keyCode == 68){
                                document.getElementById('bigCar').play();
                            }
                                                                                 
                            else if(event.keyCode == 81) {
                                //custom command 1
                            }
                            else if(event.keyCode == 69) {
                                //custom command 2
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
                                xmlhttp.open("GET", "../../lib/pages/speedmeter.php", true);
                                xmlhttp.send();
                            }, 1000);
                            </script>
                        </div>             
                        <div id="meter" class="col-md-6">                                                      
                           
                        </div>
		</div>
	</div>