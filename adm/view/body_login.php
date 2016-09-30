<? function dis_login_error() { ?>
<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                test<a href="#" class="alert-link"></a>.
                            </div>
<? } ?>	

<? function login_form() { // wyświetl formularz logowania ?>
<div class="container">
        <div class="row">
			
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Zaloguj się</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="index.php?show=zaloguj" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Użytkownik" name="user" type="user" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Hasło" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <!--
									<label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
									-->
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type=submit value="Zaloguj" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>
		<? dis_login_error(); ?>
    </div>
<? } ?>