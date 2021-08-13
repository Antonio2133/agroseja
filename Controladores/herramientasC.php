<?php

class HerramientasC{

	public function VerHerramientasC(){

		$tablaBD = "herramientas";

		$respuesta = HerramientasM::VerHerramientasM($tablaBD);

		foreach ($respuesta as $key => $value) {
			
			echo '<div class="agileits-services-info">
						<h4 class="my-sm-3 my-2">'.$value["imagen"].'</h4>
						<h4 class="my-sm-3 my-2">'.$value["titulo"].'</h4>
						<p>'.$value["descripcion"].'</p>
					</div>
				</div>';

				

		}

	}

}