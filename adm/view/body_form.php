<? function form_build() { ?>
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
						<h1 class="">Formularze</h1>
					</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                    

                            
                                    <div class="container">
      <div class="row clearfix">
        <!-- Building Form. -->
        <div class="span6">
          <div class="clearfix">
            <h2>Your Form</h2>
            <hr>
            <div id="build">
              <form id="target" class="form-horizontal">
              </form>
            </div>
          </div>
        </div>
        <!-- / Building Form. -->

        <!-- Components -->
        <div class="span6">
          <h2>Drag & Drop components</h2>
          <hr>
          <div class="tabbable">
            <ul class="nav nav-tabs" id="formtabs">
              <!-- Tab nav -->
            </ul>
            <form class="form-horizontal" id="components">
              <fieldset>
                <div class="tab-content">
                  <!-- Tabs of snippets go here -->
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- / Components -->

      </div> 
      </div>

    </div> <!-- /container -->
                              
                        </div>
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                </div>
			</div>
			<script data-main="files/lib/assets/js/main-built.js" src="files/lib/assets/js/lib/require.js" ></script>	
											
			<? footer(); ?>				
<? } ?>