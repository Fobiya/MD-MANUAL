 <?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = trim($_POST["project_name"]);
	$admin_email  = trim($_POST["admin_email"]);
	$form_subject = trim($_POST["form_subject"]);
	
	$NAME = $_POST['name'];
    $PHONE = $_POST['phone'];
    $email = $_POST['email'];


	
	

	foreach ( $_POST as $key => $value ) {
		
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "start_day" && $key != "campaign_token" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
		

	}
}
} else if ( $method === 'GET' ) {

	
	$project_name = trim($_GET["project_name"]);
	$admin_email  = trim($_GET["admin_email"]);
	$form_subject = trim($_GET["form_subject"]);
  
	$NAME = $_POST['name'];
    $PHONE = $_POST['phone'];
    $email = $_POST['email'];



	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
		
	}
}
}

$message = "<table style='width: 100%;'>$message</table>";



function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .

'From:  <youMAIL SERVER> '.adopt($project_name).'' . PHP_EOL .
'Reply-To: youMAIL SERVER' . PHP_EOL;



mail($admin_email, adopt($form_subject), $message, $headers );
