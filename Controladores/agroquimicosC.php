<?php

class AgroquimicoC{

	public function MostrarAgroquimicoC(){

		$tablaBD = "agroquimicos";

		$respuesta = AgroquimicoM::MostrarAgroquimicoM($tablaBD);

		foreach ($respuesta as $key => $value) {
			
			echo '<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 proj_gallery_grid" data-aos="zoom-in">

					<div class="section_2_gallery_grid">

						<a title="'.$value["precio_credito"].'" href="admin/'.$value["imagen"].'" class="img-fluid">

							<div class="section_1_gallery_grid1">

								<img src="admin/'.$value["imagen"].'" alt=" " class="img-fluid" />

								<div class="proj_gallery_grid1_pos">

									<h3>'.$value["titulo"].'</h3>

									<p>'.$value["precio_contado"].'</p>

								</div>
							</div>
						</a>
					</div>

				</div>';

		}

	}

}