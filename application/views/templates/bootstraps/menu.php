<header id="header" class="header-flex" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 220, 'stickyChangeLogo': false}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-logo">
						<a href="<?=base_url()?>">
							<img alt="unclejhouse" width="85" height="85" src="<?=base_url()?>logo.jpeg">
							<!-- <font style="font-size:17px;">UNCLE J HOUSE</font> -->
						</a>
					</div>
				</div>
				<div class="header-column">
					<div class="header-row">
						<div class="header-nav header-nav-stripe">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="active">
											<a href="<?=base_url()?>">
												Home
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>">
												Kost
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>">
												Rooms &amp; Rates
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>">
												Special Offers
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>">
												Location
											</a>
										</li>
										<li class="dropdown dropdown-full-color dropdown-primary dropdown-mega dropdown-mega-book-now" id="headerBookNow">
											<a class="dropdown-toggle" href="<?=base_url()?>">
												Book Now
											</a>
											<ul class="dropdown-menu">
												<li>
													<div class="dropdown-mega-content">
														<form id="bookFormHeader" action="demo-hotel-book.html" method="POST">
															<div class="row">
																<div class="form-group">
																	<div class="col-md-12">
																		<div class="form-control-custom form-control-datepicker-custom">
																			<input type="text" value="" class="form-control text-uppercase font-size-sm" data-msg-required="This field is required." placeholder="Arrival" name="bookNowArrivalHeader" id="bookNowArrivalHeader" required>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="form-group">
																	<div class="col-md-12">
																		<div class="form-control-custom form-control-datepicker-custom">
																			<input type="text" value="" class="form-control text-uppercase font-size-sm" data-msg-required="This field is required." placeholder="Departure" name="bookNowDepartureHeader" id="bookNowDepartureHeader" required>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="form-group">
																	<div class="col-md-6">
																		<div class="form-control-custom">
																			<select class="form-control text-uppercase font-size-sm" name="bookNowAdults" data-msg-required="This field is required." id="bookNowAdults" required>
																				<option value="">Adults</option>
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4">4</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-control-custom">
																			<select class="form-control text-uppercase font-size-sm" name="bookNowKids" data-msg-required="This field is required." id="bookNowKids" required>
																				<option value="">Kids</option>
																				<option value="1">0</option>
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4">4</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="submit" value="Check availability" class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
																</div>
															</div>
														</form>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
