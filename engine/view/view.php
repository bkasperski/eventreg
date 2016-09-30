<? function f_event_content_disp($var) {?>
			<div class="breadcrumbs"><a href="/events/">Wydarzenia</a><? echo $var[1];?></div>
			<p class="date">Dodano: <? echo $var[4];?></p></br>
			<h1  style="text-align: left;" class="header"><? echo $var[1];?></h1>
			<p>Termin: <span style=" font-size: 18px;"><? echo''.$var[5].' - '.$var[6].'';?></span></p>	
				<div class="fb-row">
				<div class="fb-like" data-href="<? echo 'http://'.$_SERVER[HTTP_HOST].''.$_SERVER[REQUEST_URI].''; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></div>
				<div class="news-box">
					<div class="news-box-text"><? echo $var[3];?></div>
				</div>
				<?button($var);?>
				
				
				
				

<?	}	?>

<? function f_event_list_disp_fb() {?>
				<div class="breadcrumbs"></div>
				<!--<h1 class="header">SPOTKAJMY SIĘ !!  REJESTRACJA ON-LINE</h1>	
						<p>Witamy w Rejestratorze Online!<br /><br />To narzędzie pozwoli wszystkim Państwu w łatwy sposób monitorować wszystkie wydarzenia, które będą organizowane przez Integart. W prosty sposób mogą Państwo zgłaszać chęć uczestnictwa w eventach lub szkoleniach. Po wypełnieniu formularza prosimy oczekiwać na email z potwierdzeniem rejestracji. Prosimy pamiętać, że na każde wydarzenie przewidziana jest określona ilość miejsc. Ostatecznym  potwierdzeniem udziału jest mail otrzymany po weryfikacji zgłoszenia.</p>
				<div class="fb-row">
				<div class="fb-like" data-href="<? #echo 'http://'.$_SERVER[HTTP_HOST].''.$_SERVER[REQUEST_URI].''; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></div>
					<div class="select-brand"></div>-->
<? } ?>

<? function f_event_list_disp ($var) {?>			
	<div class="news-box">
		<p class="date">Dodano: <? echo $var[4];?></p></br>
		<h3 style="text-align: left;"><a target="_self" <? echo 'href="/events/item/'.$var[0].'">'.$var[1].'';?></a></h3>
		<p>Termin: <span style=" font-size: 18px;"><? echo''.$var[5].' - '.$var[6].'';?></span></p>
		<div class="news-box-text"><? echo $var[2];?></div></br>
		<a target="_self" <? echo 'href="/events/item/'.$var[0].'"'; ?> class="more">czytaj więcej</a>
	</div>
	<div class="select-brand"></div>
<?	}	?>


<? function f_event_form_disp ($e_id, $var) {?>

<div class="breadcrumbs"><a href="/events/">Wydarzenia</a><a href="/events/item/<? echo $e_id; ?>"><? echo $var[2];?></a>Rejestracja</div>		
<form class="form-horizontal" method="post" action="/events/registration">
<input type="hidden" name="e_id" value="<? echo $e_id; ?>">
<!-- Form Name -->
<legend><?echo $var[2];?> - Rejestracja</legend>
<!-- Text input-->
<div class="select-brand"></div>
<?echo $var[3];?>
</form>
<div class="select-brand"></div>



<?	}	?>