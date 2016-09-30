<?
function content_login()
{
	if(!isset($_GET['show']))
	{
		$_GET['show'] = 'index';
	}
			switch($_GET['show'])
			{
				// rejestracja_form
				case 'zaloguj':
					zaloguj();
				break;
				
				// hello
				default:
					singin();
				break;
			}
}
function con_bd()
	// funkcja łaczy z baza danych
{
   $result = new mysqli('localhost', 'wr1511_ev', 'SXcNn7Cfo', 'wr1511_ev', '3306'); 
   //$result = new mysqli('localhost', 'root', 'rowerek88', 'reg', '3306'); 
   if (!$result)
      throw new Exception('Połączenie z serwerem bazy danych nie powiodło się');
   else
      return $result;
}
//Funkcje logowania
function zaloguj()
{
// utworzenie krótkich nazw zmiennych
	$file_name = uniqid();
	$tmp_file = $file_name;
	$user = $_POST['user'];
	$password = $_POST['password'];
	if ($user && $password)
// właśnie nastąpiła próba logowania
		{
		if(loguj($user, $password))
// jeżeli użytkownik znajduje się w bazie danych rejestracja identyfikatora
			session_set_cookie_params(3600,"/",$_SERVER['SERVER_NAME']); //calkowity czas trwania sesji 3600 s
			$_SESSION['current_user'] = $user;
			$_SESSION['tmp_file'] = $tmp_file;
			header("Location: admin.php");
		}  
		else
		{
			$error_msg = 'Pola <b> użytkonik </b> oraz <b>hasło</b> nie mogą być puste. Spróbuj ponownie';
			$_SESSION['error'] = $error_msg;
			header("Location: index.php");
		}      
}
function loguj($user, $password )
// sprawdzenie nazwy użytkownika i hasła w bazie danych
// jeżeli się zgadza, zwraca true
// jeżeli nie, wyrzuca wyjątek
{
// połączenie z bazą danych
	$con = con_bd();

// sprawdzenie unikatowości nazwy użytkownika
	$result = $con->query("select * from users where user='$user' and password = sha1('$password')"); //SQL
	if (!$result)
		echo 'Logowanie nie powiodło się.';
	if ($result->num_rows>0)
		return true;
	else 
		echo 'Logowanie nie powiodło się.';
//header("Location: index.php");
}
function singin()
//	WYświetla funkcję logowania lub wyświelta zalogowanego usera
{
	if (isset($_SESSION['current_user']))
// Sprawdza czy w sesji jest zarejestrowany użytkownik
		header("Location: admin.php");
// Jeśli tak, to wyświetla menu użytkownika
	else
		login_form();
// Jeśli nie, wyświetla formularz logowania	  	
}

function wyloguj()
{
	$current_user = $_SESSION['current_user'];  
// przechowanie do sprawdzenia, czy logowanie wystąpiło
	unset($_SESSION['current_user']);
	$close_session = session_destroy();

// początek wyświetlania html
	if (!empty($current_user))
	{
		if ($close_session)
		{
// jeżeli użytkownik zalogowany i nie wylogowany
			header("Location: index.php");
		}
		else
		{
// użytkownik zalogowany i wylogowanie niemożliwe
			echo 'Błąd, nie moge Cie wylogować.<br />';
		}
	}
	else
	{
// jeżeli brak zalogowania, lecz w jakiś sposób uzyskany dostęp do strony
		echo 'Pola <b> UŻYTKOWNIK </b> oraz <b>HASŁO</b> nie mogą być puste. Spróbuj ponownie';
	}	
}

/*function login_error() { 
if (isset($_SESSION['error']))
{
	dis_login_error();
	unset($_SESSION['error']);
	
}
}*/
?>