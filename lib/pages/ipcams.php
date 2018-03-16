    <link rel="stylesheet" type="text/css" href="tpl/css/ok.css">
    <div class="container">
		<div class="row row2">
			<h2 class="text-center">Bekijk hier het spel dat gespeeld wordt!</h2>
			<!-- Hier komt de projectbeschrijving -->
		</div>
	</div>
        <div class="cam">
            <script language="JavaScript" type="text/javascript">

                function reload()
                {
                    setTimeout('reloadImg("refresh")',1000)
                };

                function reloadImg(id)
                {
                    var obj = document.getElementById(id);
                    var date = new Date();
                    obj.src = "http://foscam.serverict.nl/snapshot.cgi?user=gast&pwd=gast&t=" + Math.floor(date.getTime()/1000);
                }

            </script>

            <img src="http://foscam.serverict.nl/snapshot.cgi?user=gast&pwd=gast&t=" height="480px" width="640px" name="refresh" id="refresh" onload='reload(this)' onerror='reload(this)'>
        </div>
