				<div id="navigation">
					<!-- Navigation Menu-->
					<ul class="navigation-menu">
						<li class="has-submenu">
							<a href="<?= base_url('admin') ?>"><i class="mdi mdi-view-dashboard"></i><?= lang('App.dashboard') ?></a>
						</li>
						<li class="has-submenu">
							<a href="#"> <i class="fa fa-swatchbook"></i> <?= lang('App.catalogs') ?> <div class="arrow-down"></div>
							</a>
							<ul class="submenu">
								<li> <a href="<?= base_url('admin/catalogs/programming-languages') ?>"> <?= lang('App.programming_languages') ?>	</a> </li>
								<li> <a href="<?= base_url('admin/catalogs/frameworks') ?>"> <?= lang('App.frameworks') ?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/databases') ?>"> <?= lang('App.databases') ?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/operating-systems') ?>"> <?= lang('App.operating_systems') ?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/methodologies') ?>"> <?= lang('App.methodologies') ?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/type-software') ?>"> <?= lang('App.type_software')?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/softwares') ?>"> <?= lang('App.softwares')?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/cloud-tools') ?>"> <?= lang('App.cloud').' '.lang('tools') ?> </a> </li>
								<li> <a href="<?= base_url('admin/catalogs/languages') ?>"> <?= lang('App.languages') ?> </a> </li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="<?= base_url('admin/company') ?>"> <i class="fa fa-building"></i> <?= lang('App.companies') ?> </a>
						</li>

					<!--
						<li class="has-submenu">
							<a href="#"> <i class="mdi mdi-invert-colors"></i>User Interface <div class="arrow-down">
								</div></a>
							<ul class="submenu megamenu">
								<li>
									<ul>
										<li>
											<a href="ui-buttons.html">Buttons</a>
										</li>
										<li>
											<a href="ui-cards.html">Cards</a>
										</li>
										<li>
											<a href="ui-draggable-cards.html">Draggable Cards</a>
										</li>
										<li>
											<a href="ui-checkbox-radio.html">Checkboxs-Radios</a>
										</li>
										<li>
											<a href="ui-material-icons.html">Material Design Icons</a>
										</li>
										<li>
											<a href="ui-font-awesome-icons.html">Font Awesome</a>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<a href="ui-dripicons.html">Dripicons</a>
										</li>
										<li>
											<a href="ui-themify-icons.html">Themify Icons</a>
										</li>
										<li>
											<a href="ui-modals.html">Modals</a>
										</li>
										<li>
											<a href="ui-notification.html">Notification</a>
										</li>
										<li>
											<a href="ui-range-slider.html">Range Slider</a>
										</li>
										<li>
											<a href="ui-components.html">Components</a>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<a href="ui-sweetalert.html">Sweet Alert</a>
										</li>
										<li>
											<a href="ui-treeview.html">Tree view</a>
										</li>
										<li>
											<a href="ui-widgets.html">Widgets</a>
										</li>
										<li>
											<a href="ui-typography.html">Typography</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#">
								<i class="mdi mdi-lifebuoy"></i>Components <div class="arrow-down"></div></a>
							<ul class="submenu">
								<li class="has-submenu">
									<a href="#">Forms <div class="arrow-down"></div></a>
									<ul class="submenu">
										<li>
											<a href="form-elements.html">General Elements</a>
										</li>
										<li>
											<a href="form-advanced.html">Advanced Form</a>
										</li>
										<li>
											<a href="form-validation.html">Form Validation</a>
										</li>
										<li>
											<a href="form-wizard.html">Form Wizard</a>
										</li>
										<li>
											<a href="form-fileupload.html">Form Uploads</a>
										</li>
										<li>
											<a href="form-quilljs.html">Quilljs Editor</a>
										</li>
										<li>
											<a href="form-xeditable.html">X-editable</a>
										</li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="#">Tables <div class="arrow-down"></div></a>
									<ul class="submenu">
										<li>
											<a href="tables-basic.html">Basic Tables</a>
										</li>
										<li>
											<a href="tables-datatable.html">Data Tables</a>
										</li>
										<li>
											<a href="tables-responsive.html">Responsive Table</a>
										</li>
										<li>
											<a href="tables-editable.html">Editable Table</a>
										</li>
										<li>
											<a href="tables-tablesaw.html">Tablesaw Table</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="calendar.html">Calendar</a>
								</li>
								<li>
									<a href="inbox.html">Mail</a>
								</li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#"> <i class="mdi mdi-chart-donut-variant"></i>Charts <div class="arrow-down">
								</div></a>
							<ul class="submenu">
								<li>
									<a href="charts-flot.html">Flot Charts</a>
								</li>
								<li>
									<a href="charts-morris.html">Morris Charts</a>
								</li>
								<li>
									<a href="charts-chartist.html">Chartist Charts</a>
								</li>
								<li>
									<a href="charts-chartjs.html">Chartjs Charts</a>
								</li>
								<li>
									<a href="charts-other.html">Other Charts</a>
								</li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#"> <i class="mdi mdi-cards-outline"></i>Pages <div class="arrow-down"></div></a>
							<ul class="submenu megamenu">
								<li>
									<ul>
										<li>
											<a href="pages-starter.html">Starter Page</a>
										</li>
										<li>
											<a href="pages-login.html">Login</a>
										</li>
										<li>
											<a href="pages-register.html">Register</a>
										</li>
										<li>
											<a href="pages-recoverpw.html">Recover Password</a>
										</li>
										<li>
											<a href="pages-lock-screen.html">Lock Screen</a>
										</li>
										<li>
											<a href="pages-confirm-mail.html">Confirm Mail</a>
										</li>
										<li>
											<a href="pages-404.html">Error 404</a>
										</li>
										<li>
											<a href="pages-500.html">Error 500</a>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<a href="extras-projects.html">Projects</a>
										</li>
										<li>
											<a href="extras-tour.html">Tour</a>
										</li>
										<li>
											<a href="extras-taskboard.html">Taskboard</a>
										</li>
										<li>
											<a href="extras-taskdetail.html">Task Detail</a>
										</li>
										<li>
											<a href="extras-profile.html">Profile</a>
										</li>
										<li>
											<a href="extras-maps.html">Maps</a>
										</li>
										<li>
											<a href="extras-contact.html">Contact list</a>
										</li>
										<li>
											<a href="extras-pricing.html">Pricing</a>
										</li>
									</ul>
								</li>
								<li>
									<ul>
										<li>
											<a href="extras-timeline.html">Timeline</a>
										</li>
										<li>
											<a href="extras-invoice.html">Invoice</a>
										</li>
										<li>
											<a href="extras-faq.html">FAQs</a>
										</li>
										<li>
											<a href="extras-gallery.html">Gallery</a>
										</li>
										<li>
											<a href="extras-email-templates.html">Email Templates</a>
										</li>
										<li>
											<a href="extras-maintenance.html">Maintenance</a>
										</li>
										<li>
											<a href="extras-comingsoon.html">Coming Soon</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="has-submenu">
							<a href="#"> <i class="mdi mdi-card-bulleted-settings-outline"></i>Layouts <div class="arrow-down"></div>
								</a>
							<ul class="submenu">
								<li>
									<a href="layouts-menubar-dark.html">Menubar Dark</a>
								</li>
								<li>
									<a href="layouts-center-menu.html">Center Menu</a>
								</li>
								<li>
									<a href="layouts-menu-drop-dark.html">Menu Drop Dark</a>
								</li>
								<li>
									<a href="layouts-preloader.html">Preloader</a>
								</li>
								<li>
									<a href="layouts-normal-header.html">Unsticky Header</a>
								</li>
								<li>
									<a href="layouts-boxed.html">Boxed</a>
								</li>
							</ul>
						</li>
					</ul>
					-->
					<div class="clearfix"></div>
				</div>
				<!-- end #navigation -->