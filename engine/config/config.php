<?
function con_bd()
	// funkcja �aczy z baza danych
{
   $result = new mysqli('localhost', 'wr1511_ev', 'SXcNn7Cfo', 'wr1511_ev', '3306'); 
   //$result = new mysqli('localhost', 'root', 'rowerek88', 'reg', '3306'); 
   if (!$result)
      throw new Exception('Po��czenie z serwerem bazy danych nie powiod�o si�');
   else
      return $result;
}
?>