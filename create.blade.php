@extends('Backend.Candidat.candidat')
@section('content')

<!-- Header Container
================================================== -->

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->

<!-- Dashboard Container / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			
	
			<!-- Row -->
			<div class="row">
     		<form  action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">

				

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> Mon profil</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="" alt="image" />
										<div class="upload-button"></div>
										<input class="file-upload" name="pic" type="file" accept="image/*"/>
										@error('pic')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										   @enderror
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Nom</h5>
												<input name="nom" type="text" id="nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value=""  autocomplete="nom" autofocus>
                                                @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                           		@enderror</div>
										</div>
									

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Prenom</h5>
                       							<input name="prenom" type="text" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
                        						@error('prenom')
                       							<span class="invalid-feedback" role="alert">
                           							<strong>{{ $message }}</strong>
                        						</span>
                   								@enderror </div>
                						</div>

								       
										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Sexe</h5>
												<select name="sexe" class="form-control{{ $errors->has('sexe') ? ' is-invalid' : '' }}" value="" autocomplete="sexe" autofocus>
                        							<option value="homme">Homme</option>
                        							<option value="femme">Femme</option>
                   								</select>
                   								@error('sexe')
                   								<span class="invalid-feedback" role="alert">
                        							<strong>{{ $message }}</strong>
                   								</span>
               									@enderror</div>
            							</div>
										

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Date de naissance </h5>
                       							<input name="datenaissance" type="date" class="form-control{{ $errors->has('datenaissance') ? ' is-invalid' : '' }}" value="" autocomplete="datenaissance" autofocus >
                       							@error('datenaissance')
                        						<span class="invalid-feedback" role="alert">
                            						<strong>{{ $message }}</strong>
                        						</span>
                    							@enderror
                    						</div>
                						</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Téléphone</h5>
												<input name="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" value="" autocomplete="tel" autofocus >
                        						@error('tel')
                        						<span class="invalid-feedback" role="alert">
                            						<strong>{{ $message }}</strong>
                        						</span>
                    							@enderror </div>
                						</div>
                                    
										

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
                        						<input  name="email" type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="" autocomplete="email" autofocus >
                        						@error('email')
                    							<span class="invalid-feedback" role="alert">
                        							<strong>{{ $message }}</strong>
                    							</span>
                								@enderror</div>
										</div>


										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Adresse</h5>
												<input name="adresse" type="text" class="form-control {{ $errors->has('adresse') ? ' is-invalid' : '' }}" value="">
												@error('adresse')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror</div>
										</div>
                    					

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Ville</h5>
												<input name="ville" type="text" class="form-control {{ $errors->has('ville') ? ' is-invalid' : '' }}" value="">
												@error('ville')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror</div>
										</div>
                    		
										<div class="col-xl-12">
											<div class="submit-field">
													<button type="submit" class="button ripple-effect">Suivant</button>
													
												</div>
										</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="col-xl-12">
		<div class="dashboard-box margin-top-0">

			<!-- Headline -->
			<div class="headline">
				<h3><i class="icon-feather-book-open"></i> Formations</h3>
			</div>

			<div class="content with-padding padding-bottom-0">

				<div class="row">

					<div class="col">
						<div class="row">

							<div class="col-xl-6">
									<div class="submit-field">
									<h5>Diplome</h5>
									<input name="titre" type="text" id="titre" class="form-control{{ $errors->has('titre') ? ' is-invalid' : '' }}" value=""  autocomplete="titre" autofocus>
									@error('titre')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror</div>
							</div>

							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Ecole</h5>
									<input name="nom" type="text" id="nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value=""  autocomplete="nom" autofocus>
									@error('nom')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									   @enderror</div>
							</div>
						

							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Date de début</h5>
									   <input name="prenom" type="date" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
									@error('prenom')
									   <span class="invalid-feedback" role="alert">
										   <strong>{{ $message }}</strong>
									</span>
									   @enderror </div>
							</div>

						   
							<div class="col-xl-6">
								<div class="submit-field">
									<h5>Date de fin</h5>
									   <input name="prenom" type="date" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
									@error('prenom')
									   <span class="invalid-feedback" role="alert">
										   <strong>{{ $message }}</strong>
									</span>
									   @enderror </div>
							</div>
							
						
				
							<div class="col-xl-12">
								<div class="submit-field">
										<button type="submit" class="button ripple-effect">Suivant</button>
										
									</div>
							</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>


<div class="col-xl-12">
	<div class="dashboard-box margin-top-0">

		<!-- Headline -->
		<div class="headline">
			<h3><i class="icon-material-outline-library-books"></i> Expériences</h3>
		</div>

		<div class="content with-padding padding-bottom-0">

			<div class="row">

				<div class="col">
					<div class="row">

						<div class="col-xl-6">
								<div class="submit-field">
								<h5>Intitulé</h5>
								<input name="titre" type="text" id="titre" class="form-control{{ $errors->has('titre') ? ' is-invalid' : '' }}" value=""  autocomplete="titre" autofocus>
								@error('titre')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror</div>
						</div>

						<div class="col-xl-6">
							<div class="submit-field">
								<h5>Lieu</h5>
								<input name="nom" type="text" id="nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value=""  autocomplete="nom" autofocus>
								@error('nom')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								   @enderror</div>
						</div>
					

						<div class="col-xl-6">
							<div class="submit-field">
								<h5>Date de début</h5>
								   <input name="prenom" type="date" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
								@error('prenom')
								   <span class="invalid-feedback" role="alert">
									   <strong>{{ $message }}</strong>
								</span>
								   @enderror </div>
						</div>

					   
						<div class="col-xl-6">
							<div class="submit-field">
								<h5>Date de fin</h5>
								   <input name="prenom" type="date" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
								@error('prenom')
								   <span class="invalid-feedback" role="alert">
									   <strong>{{ $message }}</strong>
								</span>
								   @enderror </div>
						</div>
						
					
			
						<div class="col-xl-12">
							<div class="submit-field">
									<button type="submit" class="button ripple-effect">Suivant</button>
									
								</div>
						</div>
		</div>
	</div>
</div>
</div>
</div>
</div>


<div class="col-xl-12">
	<div class="dashboard-box margin-top-0">

		<!-- Headline -->
		<div class="headline">
			<h3><i class="icon-material-outline-filter-none"></i> Divers</h3>
		</div>

		<div class="content with-padding padding-bottom-0">

			<div class="row">

				<div class="col">
					<div class="row">

						<div class="col-xl-6">
								<div class="submit-field">
								<h5>Intitulé</h5>
								<input name="titre" type="text" id="titre" class="form-control{{ $errors->has('titre') ? ' is-invalid' : '' }}" value=""  autocomplete="titre" autofocus>
								@error('titre')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror</div>
						</div>

						<div class="col-xl-6">
							<div class="submit-field">
								<h5>Lieu</h5>
								<input name="nom" type="text" id="nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value=""  autocomplete="nom" autofocus>
								@error('nom')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								   @enderror</div>
						</div>
					

						<div class="col-xl-6">
							<div class="submit-field">
								<h5>Date de début</h5>
								   <input name="prenom" type="date" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
								@error('prenom')
								   <span class="invalid-feedback" role="alert">
									   <strong>{{ $message }}</strong>
								</span>
								   @enderror </div>
						</div>

					   
						<div class="col-xl-6">
							<div class="submit-field">
								<h5>Date de fin</h5>
								   <input name="prenom" type="date" id="lastName" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" value="" autocomplete="prenom" autofocus>
								@error('prenom')
								   <span class="invalid-feedback" role="alert">
									   <strong>{{ $message }}</strong>
								</span>
								   @enderror </div>
						</div>
						
					
			
						<div class="col-xl-12">
							<div class="submit-field">
									<button type="submit" class="button ripple-effect">Suivant</button>
									
								</div>
						</div>
		</div>
	</div>
</div>
</div>
</div>
</div>


<div class="col-xl-12">
	<div class="dashboard-box margin-top-0">

		<!-- Headline -->
		<div class="headline">
			<h3><i class="icon-material-outline-picture-as-pdf"></i> Documents</h3>
		</div>

		<div class="content with-padding padding-bottom-0">

			<div class="row">

				<div class="col">
					<div class="row">

						<div class="col-xl-12">
								<div class="submit-field">
								<div class="uploadButton margin-top-30">
									<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
									<label class="uploadButton-button ripple-effect" for="upload">Télécharger document</label>
								</div>
						</div>
		
			
						<div class="col-xl-12">
							<div class="submit-field">
									<button type="submit" class="button ripple-effect">Suivant</button>
									
								</div>
						</div>
		</div>
	</div>
</div>
</div>
</div>
</div>


</div>

	

				<!-- Dashboard Box -->
			
				
				<!-- Button -->
				

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				
				
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
@endsection