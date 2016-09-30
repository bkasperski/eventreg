<? function reg_list() { ?>
	<? head(); ?>
		<!-- wrapper -->
		<div id="wrapper">	
			<? navigation(); ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				
                    <h1 class="page-header">Lista uczestników - <?  $event = $_GET['event']; echo $event; ?></h1>
                </div>
                <!-- /.col-lg-12 -->            
				<div class="col-lg-12">
					<div class="form-group">
						<div class="input-group ">
							<div class="">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="success">Potwierdzony</button>
								<button type="button" class="btn btn-info btn-filter" data-target="info">Oczekujący</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="danger">Odrzucony</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Wszystkie</button>
							</div>
						</div>
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
                    <div class="panel panel-default">                     
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Imie i nazwsko</th>
                                            <th>Firma</th>
											<th>Miejscowość</th>
											<th>Email</th>
											<th>Telefon</th>
											<th>Dane1</th>
											<th>Dane2</th>
											<th>Dane3</th>
											<th>Dane4</th>
											<th>Status</th>
                                            <th>Opcje</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fill2">
                                       <? worker_reg_list(); ?>                                                                                                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
					<!-- /.col-lg-12 -->
				</div>	
				</div>
				</div>
						</div>					
			<? footer(); ?>				
<? } ?>