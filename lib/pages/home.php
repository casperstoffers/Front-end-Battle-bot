	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
	  <!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img class="img-responive" src="tpl/image/mountains500.png" alt="sliderimage">
				<div class="carousel-caption">
				<h1>Arduino Battlebots</h1>
				</div>
			</div>
			<div class="item">
			  <img class="img-responive" src="tpl/image/snow500.png" alt="sliderimage">
			</div>
			<div class="item">
			  <img class="img-responive" src="tpl/image/red500.png" alt="sliderimage">
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="container text-center">
		<h1 class="headings">Wat valt hier te beleven?</h1>
		<div class="row row1">
			<div class="col-sm-4 text-center">
				
				<!-- Hier komt de content-->
                                <button id='buttonbattle'><h3 class="headings"><a href="index.php" class='remove'>Volg de battle!</a></h3></button>
			</div>
                    <?php
                    if(isset($_SESSION['name']) && ($_SESSION['role'] == "bot")){
			echo "<div class='col-sm-8 text-center'>
				<h3 class='headings'>Speel het spel</h3>
				<!-- Hier komt de content-->
			</div>";
                    }
                    else{
                        echo " <div class='col-sm-8 text-center'>
                                <ul>
                                    <li class='dropdown'>
						<a href='#' class='remove' class='dropdown-toggle' data-toggle='dropdown' role='button'>
							<button id='buttonlogin'>&#8629; Login</button> 
						</a>
						<div class='dropdown-menu' id='formLogin' >
							<div class='row'>
								<div class='container-fluid'>
									<form action='' method='post' accept-charset='UTF-8'>
										<div class='form-group'>
											<label>Client</label>
											<input class='form-control' name='username' id='username' type='text'>
										</div>
										<div class='form-group'>
											<label>Wachtwoord</label>
											<input class='form-control' name='password' id='password' type='password'><br>
										</div>
										<button type='submit' name='submit' class='btn btn-success btn-sm'>Login</button>
									</form>
								</div>
							</div>
						</div>
					</li>
                                </ul>
                            </div>";
                    }
                    
                    ?>
			<div class="col-sm-8 text-center" class="content-right">
				<h3 class="headings">Bekijk de score</h3>
				<!-- Hier komt de content-->
			</div>  <table id='scoretable'>
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>First</th>
                                        <th>Mark</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th>1</th>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>2</th>
                                        <td>Jacob</td>
                                        <td>Mark</td>
                                      </tr>
                                      <tr>
                                        <th>3</th>
                                        <td>Larry</td>
                                        <td>Mark</td>
                                      </tr>
                                    </tbody>
                                  </table>
		</div>
	</div>
	<div class="container">
		<div class="row row2">
			<h1 class="text-center">Project Arduino Battlebots</h1>
			<p></p>
		</div>
	</div>