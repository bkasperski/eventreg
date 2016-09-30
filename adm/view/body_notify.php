<? function notify() { ?>
	<? head(); ?>
		<!-- wrapper -->
			
			<? navigation(); ?>
			<div id="page-wrapper">
				<div class="row">
					
						<!-- /.col-lg-12 -->
				</div>
				<div class="row">
				<div class="col-lg-12">
                    <div class="col-lg-12">
						<h1 class="">Powiadomienia</h1>
					</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#default" data-toggle="tab"><i class="fa fa-check-square fa-fw"></i> Domyślne</a>
                                </li>
                                <li><a href="#custom" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Spersonalizowane</a>
                                </li>								
								<li><a href="#settings" data-toggle="tab"><i class="fa fa-gear fa-fw"></i>  Ustawienia</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="default">
                                    <h4>Powiadomienia domyślne</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="custom">
                                    <h4>Powiadomienia spersonalizowane</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>							
								<div class="tab-pane fade" id="settings">
								<h4>Ustawienia Tożsamości</h4>
									<div class="row form-group">
										<form role="form">
											<div class="col-lg-3">
                                            <input class="form-control">		
											<p class="help-block">Adres e-mail użyty do wysyłania wiadomości</p>
                                        </div>
										
                                            <div class="col-lg-3">
                                            <input class="form-control">		
											<p class="help-block">Imię i nazwisko lub nazwa użyta do wysyłania wiadomości</p>
                                        </div>											
                                    </div>
									<div class="row form-group">		
										<div class="col-lg-3">
                                            <input class="form-control">		
											<p class="help-block">Adres e-mail nadawcy w polu "Odpowiedz do"</p>
                                        </div>
										
                                            <div class="col-lg-3">
                                            <input class="form-control">		
											<p class="help-block">Nazwa nadawcy w polu "Odpowiedz do"</p>
                                        </div>	
									
									</div>		
										</form>
									</div>
								</div>									
                            </div>
                        </div>
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                </div>
			</div>
				
											
			<? footer(); ?>				
<? } ?>