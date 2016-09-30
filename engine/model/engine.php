<?


function e_event_list_engine()
{	
	
	$con = con_bd();	
	$result = $con->query("select * from event_list where status=1 ORDER BY `event_list`.`id` DESC");
	if (!$result)
	{
		echo '<h1 align="center">Brak aktywnych wydarzeń</h1><div align="center">Przepraszamy, ale strona, którą próbujesz wyświetlić nie istnieje w&nbsp;naszym serwisie.<br>Jeżeli potrzebujesz dodatkowych informacji, prosimy o&nbsp;kontakt.<br></div>';}
	
	if ($result->num_rows>0)
	{
		f_event_list_disp_fb();
		while ($var = mysqli_fetch_row($result))
		{
			f_event_list_disp($var);
		}
	}
	else {
	echo '<h1 align="center">Brak aktywnych wydarzeń</h1><div align="center">Przepraszamy, ale strona, którą próbujesz wyświetlić nie istnieje w&nbsp;naszym serwisie.<br>Jeżeli potrzebujesz dodatkowych informacji, prosimy o&nbsp;kontakt.<br></div>';}
	
}

function e_event_content_engine()
{
	
	$id = $_GET['id'];
	$con = con_bd();	
	$result = $con->query("select * from event_list where id=$id");
	if (!$result)
		echo '<h1 align="center">Strona nie została znaleziona</h1><div align="center">Przepraszamy, ale strona, którą próbujesz wyświetlić nie istnieje w&nbsp;naszym serwisie.<br>Jeżeli potrzebujesz dodatkowych informacji, prosimy o&nbsp;kontakt.<br></div>';
	$var = mysqli_fetch_row($result);
	if ($result->num_rows>0)
	{
		f_event_content_disp($var);
		}
	else
		{
		header("HTTP/1.1 404 Not Found");
		echo '<div class="breadcrumbs"></div><h1 align="center">Strona nie została znaleziona</h1><div align="center">Przepraszamy, ale strona, którą próbujesz wyświetlić nie istnieje w&nbsp;naszym serwisie.<br>Jeżeli potrzebujesz dodatkowych informacji, prosimy o&nbsp;kontakt.<br></div>';
		#header("Location: #",TRUE,404);
		#exit;	
	}
		
}


function reg()
{
// utworzenie krótkich nazw zmiennych
	$e_id = $_POST['e_id'];
	$firma=$_POST['firma'];
	$miejscowosc=$_POST['miejscowosc'];
	$imie=$_POST['imie'];
	$nazwisko=$_POST['nazwisko'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];

	
if (isset($_POST["dane1"]) && !empty($_POST["dane1"])) 
    $dane1=$_POST['dane1'];   
	else
    $dane1='none';

	
if (isset($_POST["dane2"]) && !empty($_POST["dane2"])) 
    $dane2=$_POST['dane2'];   
	else
    $dane2='none';

if (isset($_POST["dane3"]) && !empty($_POST["dane3"])) 
    $dane3=$_POST['dane3'];   
	else
    $dane3='none';

if (isset($_POST["dane4"]) && !empty($_POST["dane4"])) 
    $dane4=$_POST['dane4'];   
	else
    $dane4='none';

if (isset($_POST["dane5"]) && !empty($_POST["dane5"])) 
    $dane5=$_POST['dane5'];   
	else
    $dane5='none';

if (isset($_POST["dane6"]) && !empty($_POST["dane6"])) 
    $dane6=$_POST['dane6'];   
	else
    $dane6='none';

	$status='0';
	
	// formuła prawidłowego adresu e-mail 
	$sprawdz = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
	
	$back = '<FORM><input type="hidden" name="form_id" value="submit" /><INPUT Type="button" class="btn btn-primary submit"  VALUE="Cofnij" onClick="history.go(-1);return true;"></FORM>';
// sprawdzenia wypełnienia formularzy
	if ($firma && $imie && $nazwisko && $tel && $email )
	{
// nieprawidłowy adres poczty elektronicznej
		if(preg_match($sprawdz, $email))
		{
			if(strlen(trim($tel)) > 8)
				{
					if(rejestruj($e_id, $firma, $miejscowosc, $imie, $nazwisko, $tel, $email, $dane1, $dane2, $dane3, $dane4, $dane5, $dane6, $status ))
// przekierowanie do powiadomienia i poprawnej rejestracji
						zgloszenie($e_id, $firma, $miejscowosc, $imie, $nazwisko, $tel, $email, $dane1, $dane2, $dane3, $dane4, $dane5, $dane6, $status);
//header("Location: index.php?show=zarejestrowany");
				}
				else
				{
			echo '<br>Nr telu musi mieć 9 znaków<br><br>'.$back.' ';
			}
		}
		else
		{
			echo '<br>Adres e-mail jest nie poprawny<br><br>'.$back.' ';
		}
// próba zarejestrowania	


}
else
	{
// jeśli blad rzuca wyjatek
		echo ( '<br>Błędnie wypełniony formularz <br><br>'.$back.'');
	}
}


function rejestruj($e_id, $firma, $miejscowosc, $imie, $nazwisko, $tel, $email, $dane1, $dane2, $dane3, $dane4, $dane5, $dane6, $status )
// zarejestrowanie nowej osoby w bazie danych
// zwraca true lub komunikat o błędzie
{
	$back = '<FORM><input type="hidden" name="form_id" value="submit" /><INPUT Type="button" class="btn btn-primary submit"  VALUE="Cofnij" onClick="history.go(-1);return true;"></FORM>';
// połączenie z bazą danych
	$con = con_bd();
	$data=date("Y-m-d");
	$czas=date("H:i");
// sprawdzenie, czy email jest już zarejestrowany i czy się nie powtarza
	$wynik = $con->query("select * from reg_list where email='$email' AND e_id='$e_id'"); 
	if (!$wynik)
		{
			echo ('<br>Wykonanie zapytania nie powiodło się.');
		}																																	
	if ($wynik->num_rows>0) 
		{
			echo ('<br>Instnieje już zgłoszenie pod tym adresem email.<br><br>'.$back.'');
		}
		else
		{
// jeżeli wszystko w porządku, umieszczenie w bazie danych
	$wynik = $con->query("insert into reg_list values 
						 ('','$e_id','$firma', '$miejscowosc', '$imie', '$nazwisko', '$tel', '$email', '$status', '$dane1', '$dane2', '$dane3', '$dane4', '$dane5', '$dane6', '$data', '$czas')");
		if (!$wynik)	
			echo ('Rejestracja w bazie danych niemożliwa — proszę spróbować później.');
		else return true;	// Rejestracja udana
}
}

/*
function zgloszenie ($e_id, $firma, $imie, $nazwisko, $tel, $email, $dane1, $dane2, $dane3, $dane4, $dane5, $dane6, $status)
{
	
	$con = con_bd();	
	$result = $con->query("select * from event_list where id=$e_id");
	$var = mysqli_fetch_row($result);
	
	// Naglowki wiadomości email.
	$naglowki = "Reply-to: noreplay@integart.com.pl <noreplay@integart.com.pl>".PHP_EOL;
	$naglowki .= "From: Integart <noreplay@integart.com.pl>".PHP_EOL;
	$naglowki .= "MIME-Version: 1.0".PHP_EOL;
	$naglowki .= "Content-type: text/html; charset=utf-8".PHP_EOL; 
 
   //Wiadomość najczęściej jest generowana przed wywołaniem funkcji
	$wiadomosc = '<html> 
	<head> 
      <title>Potwierdzenie zgłoszenia</title> 
	</head>
	<body>
      <p><b>Witamy serdecznie,</b> <br><br>
	Dziękujemy za dokonanie rejestracji on-line na . </br>
	Potwierdzenie zgłoszenia zostanie zweryfikowanie w ciągu 24h. </br>
	Będziemy się z Państwem kontaktować celem autoryzacji wpisu i potwierdzenia warunków wyjazdu.  </br>
	</p>
	</body>
	</html>';
 
 
   if(mail($email, 'Potwierdzenie przyjęcia zgłoszenia', $wiadomosc, $naglowki))
   {
      echo '<br>Dziękujemy za dokonanie rejestracji on-line na . Potwierdzenie zgłoszenia zostanie zweryfikowanie w ciągu 24h. Będziemy się z Państwem kontaktować celem autoryzacji wpisu i potwierdzenia warunków wyjazdu. <br><br>Jeśli nie otrzymałeś wiadomości email sprawdż folder SPAM.';
   }
}
*/

function zgloszenie ($e_id, $firma, $miejscowosc, $imie, $nazwisko, $tel, $email, $dane1, $dane2, $dane3, $dane4, $dane5, $dane6, $status)
{
	$con = con_bd();	
	$result = $con->query("select * from event_list where id=$e_id");
	$var = mysqli_fetch_row($result);
	
	  //dodanie klasy smtp
    $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
		)
							);
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
    $mail->From = "no-reply@integart.com.pl";    //adres e-mail użyty do wysyłania wiadomości
    $mail->FromName = "Powiadomienia Integart";    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
    $mail->AddReplyTo('no-reply@integart.com.pl', 'Powiadomienia Integart - '.$var[1].''); //adres e-mail nadawcy oraz jego nazwa
                                                 //w polu "Odpowiedz do"  
    $mail->Host = "mail.integart.com.pl";    //adres serwera SMTP wysyłającego e-mail
    $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
	$mail->CharSet = "UTF-8";
	$mail->IsHTML(true);
    $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
    $mail->Username = "events@integart.com.pl";    //nazwa użytkownika do skrzynki e-mail
    $mail->Password = "7ZQMzRX0";    //hasło użytkownika do skrzynki e-mail
    $mail->Port = 587; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
    $mail->Subject = "Potwierdzenie przyjęcia zgłoszenia";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
    $mail->Body = '<html> 
	<head> 
      <title>Potwierdzenie zgłoszenia</title> 
	</head>
	<body>
      <p><b>Witamy serdecznie,</b> <br><br>
	Dziękujemy za dokonanie rejestracji on-line na '.$var[1].'. </br>
	Prosimy oczekiwać na weryfikację. Stosowna informacja zostanie przesłana emailem.</br>
	Z wybranymi osobami skontaktujemy się także telefonicznie.</br></br></br>
	<b>Zespół Integart Sp. z o.o.</b>
	</p>
	</body>
	</html>';    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
    $mail->AddAddress ("$email","$nazwisko, $imie");    //adres skrzynki e-mail oraz nazwa
                                                    //adresata, do którego trafi wiadomość
     if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
        {
		#header("Location: /index.php");
        echo '<br>Dziękujemy za dokonanie rejestracji on-line na wydarzenie - '.$var[1].'. Potwierdzenie zgłoszenia zostanie zweryfikowanie w ciągu 24h. Będziemy się z Państwem kontaktować celem autoryzacji wpisu i potwierdzenia warunków wyjazdu. <br><br><b>Jeśli nie otrzymałeś wiadomości email sprawdż folder SPAM.</b>'; //wyświetl ten komunikat
        echo '<!-- Google Code for Rejestracja na event Conversion Page --> 
<script type="text/javascript"> 
/* <![CDATA[ */ 
var google_conversion_id = 1070530428; 
var google_conversion_language = "en"; 
var google_conversion_format = "3"; 
var google_conversion_color = "ffffff"; 
var google_conversion_label = "ysgXCJiwpWoQ_P67_gM"; 
var google_remarketing_only = false; 
/* ]]> */ 
</script> 
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"> 
</script> 
<noscript> 
<div style="display:inline;"> 
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1070530428/?label=ysgXCJiwpWoQ_P67_gM&amp;guid=ON&amp;script=0"/>
</div> 
</noscript> 
';
		echo "<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1104091069678624');
fbq('track', 'CompleteRegistration');</script>

<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=1104091069678624&ev=PageView&noscript=1\"
/></noscript>";
		}            
    else    //w przeciwnym wypadku
        {           
        echo 'Dziękujemy za dokonanie rejestracji on-line na wydarzenie - '.$var[1].'.';    //wyświetl następujący
		echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
	 

}


function f_event_form()
{
	$e_id = $_GET['id'];
	$con = con_bd();
	$result = $con->query("select * from form_list where e_id=$e_id AND f_status=1");
	if (!$result)
	{
		echo '<h1 align="center">Strona nie została znaleziona</h1><div align="center">Przepraszamy, ale strona, którą próbujesz wyświetlić nie istnieje w&nbsp;naszym serwisie.<br>Jeżeli potrzebujesz dodatkowych informacji, prosimy o&nbsp;kontakt.<br></div>';
	}
	else
	{
		$var = mysqli_fetch_row($result);
		if($var[4]==1)
		{
			f_event_form_disp ($e_id, $var);
		}
		else 
		{
			echo '<h1 align="center">Rejestracja została wyłączona.</h1><div align="center">Przepraszamy, ale strona, którą próbujesz wyświetlić nie istnieje w&nbsp;naszym serwisie.<br>Jeżeli potrzebujesz dodatkowych informacji, prosimy o&nbsp;kontakt.<br></div>';
		}
		
			
		
	}
	
}

function button($var)
{
	$e_id = $_GET['id'];
	$con = con_bd();
	$getRegFormStatus = $con->query("select f_status from form_list where e_id=$e_id");
	$row = mysqli_fetch_row($getRegFormStatus);
	if ($row[0]==1)
	{
		echo '<a class="pull-right btn btn-info" target="_self" echo href="/events/item/'.$var[0].'/form">Zarejestruj</a><br>';
	}
	else
	{
		echo '<a class="pull-right btn btn-primary disabled" target="_self" echo href="#">Rejestracja zakonczona</a><br>';	
	}
}


function tytul()
{
		$e_id = intval($_GET['id']); 
        $con = con_bd();
        $getTitle = $con->query("SELECT * FROM event_list WHERE id = '$e_id'");
        $row = mysqli_fetch_row($getTitle);
		if($e_id != 0)
		{
        echo ''.$row[1].' | Integart Sp. z o.o.'; 
    }
    else {
	echo "Rejestrator Online | Integart Sp. z o.o.";
}
}
?>