<? function navigation() { ?>  
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Panel Administracyjny</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right"><a class="label label-danger" href="log.txt">Changelog</a>                              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <? echo ($_SESSION['current_user']) ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                                             
                        <li><a href="admin.php?show=settings"><i class="fa fa-gear fa-fw"></i> Ustawienia</a></li>
						<li><a href="admin.php?show=wyloguj"><i class="fa fa-sign-out fa-fw"></i> Wyloguj</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin.php"><i class="fa fa-desktop fa-fw"></i> Przegląd</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> Wydarzenia<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                               								
								<li>
                                    <a href="admin.php?show=list_event"><i class="fa fa-list-alt fa-fw"></i> Lista wydarzeń</a>
                                </li>
								<li>
                                    <a href="admin.php?show=form_build"><i class="fa fa-file-text-o fa-fw"></i> Formularze</a>
                                </li>
								<li>
									<a href="admin.php?show=report_event"><i class="fa fa-book fa-fw"></i> Raporty</a>
                                </li>
								<li>
									<a href="admin.php?show=notify"><i class="fa fa-envelope-o fa-fw"></i> Powiadomienia e-mail</a> 
								</li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-align-left fa-fw"></i> Stopka mailowa</a>                           
                        </li>
						<li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> Ustawienia<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">                               								
								<li>
                                    <a href="#"><i class="fa fa-list-alt fa-fw"></i> Konfiguracja</a>
                                </li>
								<li>
                                    <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Użytkownicy</a>
                                </li>
								<li>
									<a href="#"><i class="fa fa-book fa-fw"></i> Logi</a>
                                </li>								
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<?}?>