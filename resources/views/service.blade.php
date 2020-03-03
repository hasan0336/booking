<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome To ParkMe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" media="all">
        <meta name="title" content="Park Me">
  		<meta name="description" content="">
  		<meta name="keywords" content="">
  		<meta name="author" content="ParkMe">

        <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    </head>
    <body onload="init()" class="inner-bg">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-sm inner-custom-navbar">
			<div class="container">
			    <a class="navbar-brand" href="index.html">
					<img src="{{ asset('public/assets/images/logo.svg')}}" style="width: 15%;" class="img-fluid" alt="img" />
				</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    	<span class="fa fa-bars"></span>
			    </button>
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
					    <li><a href="#">Accueil</a></li>
						<li><a href="#">Réserver</a></li>
						<li><a href="#">Abonnement</a></li>
						<li><a href="#">Localisation</a></li>
					</ul>
				</div>  
			</div>
		</nav>

		<main>

		    <!-- Section 1 Starts -->
		    <section>
		    	<!-- <div class="container"> -->
					
					
					<div class="arrival-time">
						<div class="container">
							<div class="row">
								<div class="col-sm-10 offset-sm-1">

									<div class="row">
										
										<div class="col-sm-3 col-3">
									      <div class="arrive arri">
									        <label> ARRIVE </label>
									        <div class="sdate">03/03</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> DEPART </label>
									        <div class="sdate">03/18</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="services arri">
									        <label> SERVICE </label>
									        <div class="service">Navette PARKME (0€)</div>
									        <div class=""> &nbsp; </div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> TOTAL </label>
									        <div class="total-price"> € 0.00 </div>
									        <div class=""> &nbsp; </div>
									      </div>
										</div>

									</div>
								</div>
							</div>
				    	</div>
					</div>

					<div class="container">
			    		<div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="page2-header">
			                        <h3>ETAPE 2: SERVICE</h3>
			                    </div>
			                </div>
			            </div>

			        	<div class="page2">
							<div class="row">
				                <div class="col-sm-12 col-12">
				                    <div class="page2-header">
				                        <p>essence</p>
				                    </div>
				                </div>
				            </div>

				            <div class="row">

	                    		<div class="col-sm-12 col-12">
									<div class="page2-radio">

										<div class="row">
											<div class="col-sm-6 col-8">
												<form>
												  <div class="custom-control custom-radio">

												    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="customEx">

												    <label class="custom-control-label" for="customRadio">Plein de carburant</label>
												  </div>

												</form>
											</div>

											<div class="col-sm-6 col-4">
												<p>
													<small>1</small>
													<b>0</b> €
												</p>
											</div>
										</div>
										
									</div>
								</div>

				            </div>

				            <div class="row">
				            	<div class="col-sm-6 p-0">
				            		<div class="black-bg">
										<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>
				            		</div>
				            	</div>
				            	<div class="col-sm-6 p-0">
				            		<div class="black-bg">
				            			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>
				            		</div>
				            	</div>
				            </div>

				            <div class="row">
				            	<div class="col-sm-6 p-0">
				            		<div class="blue-border1"></div>
				            	</div>
				            	<div class="col-sm-6 p-0">
				            		<div class="blue-border2"></div>
				            	</div>
				            </div>
			        	</div>

			        	<div class="row">
							<div class="col-sm-6 offset-sm-3">
								<div class="row">
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="{{ asset('public/assets/images/img1.png')}}" class="img-fluid" alt="img" />
										</div>
									</div>
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid" alt="img" />
										</div>
									</div>
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="{{ asset('public/assets/images/img3.pn')}}g" class="img-fluid" alt="img" />
										</div>
									</div>
								</div>
							</div>
			        	</div>

			        	<div class="page1-btn">
			        		<a href="/" class="custom-btn2">Passer a la derniere etape</a>
							<a href="{{route('sub_services')}}" class="custom-btn">SUIVANT</a>
						</div>
			        </div>
		    </section>
		    <!-- Section 1 Ends -->

		</main>

	    <!-- JavaSrcipts -->

	    <script src="{{ asset('public/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('public/assets/js/custom.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    </body>
</html>