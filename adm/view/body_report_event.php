<? function report_event() { ?>
	<? head(); ?>
		<!-- wrapper -->
		<div id="wrapper">	
			<? navigation(); ?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Raporty</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
					<div class="col-lg-12">
					<div class="table-responsive">
						<div class="panel panel-default">
							<div class="panel-heading">
								Zarejestrowani klienci
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="dataTable_wrapper">
									<table class="table table-striped table-bordered table-hover" id="dataTables-raport">
										<thead>
											<tr>
												<th>Nr</th>
												<th>Firma</th>
												<th>Miejscowość</th>
												<th>Imie</th>
												<th>Nazwisko</th>
												<th>Telefon</th>
												<th>Email</th>
												<th>Latex3000</th>
												<th>Sesja</th>
												<th>Opcje</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td>1</td>
												<td>Agencja Reklamowa Image & Dekorus s.c. Mariola Grajcar-Sokalska, Adam Sokalski la</td>
												<td>Wałcz</td>
												<td>Adam</td>
												<td>Sokalski</td>
												<td>604941745</td>
												<td>biuro@imagedekorus.pl</td>
												<td>9.10.2015</td>
												<td>13:00</td>
												<td>po</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>	
				</div>
				</div>
			<? footer(); ?>				
<? } ?>