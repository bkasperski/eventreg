<? function dashboard() { ?>
		<? head(); ?>
		<!-- wrapper -->
		<div id="wrapper">	
			<? navigation(); ?>
			<!-- Page Content -->
			<div id="page-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Przegląd</h1>
							
							
							Session user: <? echo $_SESSION['current_user'];?> <br>
							Uid session temp file: <? echo $_SESSION['tmp_file'];?>
							
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->
			<!-- /#wrapper -->
		</div>
		<? footer(); ?>
<? } ?>
    
    



 