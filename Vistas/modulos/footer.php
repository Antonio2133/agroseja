<section class="newsletter text-center py-5">
	<div class="container py-lg-3">

		<div class="subscribe_inner">
			<h4 class="mb-4">Subscribete a nuestra página</h4>
			<p class="mb-4">Te enviaremos ofertas de nuestros productos y servicios.</p>

			<form action="#" method="post" class="subscribe_form">
				<input class="form-control" name="emailS" type="email" placeholder="Ingrese su Email..." required="">
				<button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
			</form>

			<?php
            
			$suscriptor = new SuscriptoresC();
			$suscriptor -> EnviarSuscriptorC();

			?>

			<div class="social mt-5">
				<ul class="d-flex mt-4 justify-content-center">
					<li class="mx-2"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fas fa-rss"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="copyright mt-5">
			<p>© 2021 Agroservicios Jacquez. All Rights Reserved<a></a> </p>
		</div>
	</div>
</section>