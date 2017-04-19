
<body class="avoid-fout page-blue ">
	<header class="header" style="margin-top:0px;">		
		<a style="margin-top:0px;margin-left:10px;" href="#">
			<img src="<?php echo base_url('assets/img/logo/innova-blanco.png')?>" width="130px">
		</a>
	</header>
		<main class="mdl-layout__content mdl-color--grey-100">
			<div class="contenedor">
				<div class="col-lg-1 col-lg-push-2 col-sm-4 col-sm-push-4">
					<br><br>
					<section class="content-inner">
						<div class="card-wrap">
							<div class="card">
								<div class="card-main">
									<div class="card-header">
										<div class="card-inner center">
											<center>
												<h4 class="card-heading">Sistema de Incentivos Proceso Produccion</h4>
			    								<p style="margin-bottom:0px !important;">Plataforma SISCOV v1.0</p>		  
			    							</center>
										</div>
									</div>

									<div class="card-inner">
										<p class="text-center">
											<span class="avatar avatar-inline avatar-lg">
												<img alt="Login" src="<?php echo base_url('assets/img/Logo/avatar-001.jpg');?>">
											</span>
										</p>

										<form class="form" method="post" action="<?php echo base_url('index.php/Acreditar')?>">
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-username">Usuario.</label>
														<input class="form-control" type="text" name="txtUsuario">
													</div>
												</div>
											</div>

											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-username">Contraseña</label>
														<input class="form-control"  type="password" name="txtpassword">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-md-10 col-md-push-1">														
														<button Class="btn btn-block btn-blue waves-button waves-effect waves-light" type="submit" name="action">Acceder</button>
													</div>
												</div>
											</div>	
										</form>
									</div>
								</div><!-- FIN card-main -->
							</div>
						</div>
					</section>
				</div>				
			</div>
		</main>