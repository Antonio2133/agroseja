<?php

class TractorC{

	public function MostrarTractorC(){

		$tablaBD = "tractores";

		$respuesta = TractorM::MostrarTractorM($tablaBD);

		foreach ($respuesta as $key => $value) {
			
			echo '<div class="pricing-container">
			<div class="col-sm-6 col-md-4">
				<a class="ligthbox">
					<img class="img-responsive img-fluid" src="'.$value["imagen"].'" alt="Park">
				</a>
			</div>
			<ul class="pricing-list bounce-invert">
				<li>
					<ul class="pricing-wrapper">
						<li class="is-visible">
							<header class="pricing-header">
								<h2>'.$value["titulo"].'</h2>
								<div class="price">
									<span class="currency">$</span>
									<span class="value">'.$value["precio_contado"].'</span>
								</div>
							</header>
							<div class="pricing-body">
								<ul class="pricing-features">
									<li><em>'.$value["precio_credito"].'</em> Precio a crédito</li>
								</ul>
							</div>
							<footer class="pricing-footer">
								<a class="select" href="#">Cotizar</a>
							</footer>
						</li>	
					</ul>
				</li>
			</ul>
		</div>';				
		}
	}
}