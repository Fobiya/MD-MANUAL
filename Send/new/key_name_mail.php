<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = trim($_POST["project_name"]);
	$admin_email  = trim($_POST["admin_email"]);
	$form_subject = trim($_POST["form_subject"]);

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" && $key != "start_day") {
			if ($key == "name") {$key = "Имя";} 
			if ($key == "phone" || $key == "custom_tel") {$key = "Контактный номер телефона";}
			if ($key == "email") {$key = "Електронный адрес";}
			if ($key == "textarea") {$key = "Сообщение";}
			if ($key == "n1" || $key == "n2" || $key == "n3" || $key == "n4" || $key == "n5" || $key == "n6" || $key == "n7" || $key == "n8" || $key == "n9" || $key == "n10" || $key == "n11" || $key == "n12" || $key == "n13" || $key == "n14" || $key == "n15" || $key == "n16" || $key == "n17" || $key == "n18" || $key == "n19" || $key == "n20") {$key = "Одежда/обувь для невесты";}
			if ($key == "f1" || $key == "f2" || $key == "f3" || $key == "f4" || $key == "f5" || $key == "f6" || $key == "f7" || $key == "f8" || $key == "f9" || $key == "f10" || $key == "f11" || $key == "f12" || $key == "f13" || $key == "f14" || $key == "f15" || $key == "f16" || $key == "f17" || $key == "f18" || $key == "f19" || $key == "f20") {$key = "Расходы в загсе";}
			if ($key == "b1" || $key == "b2" || $key == "b3" || $key == "b4" || $key == "b5" || $key == "b6" || $key == "b7" || $key == "b8" || $key == "b9" || $key == "b10" || $key == "b11" || $key == "b12" || $key == "b13" || $key == "b14" || $key == "b15" || $key == "b16" || $key == "b17" || $key == "b18" || $key == "b19" || $key == "b20") {$key = "Одежда/обувь для жениха";}
			if ($key == "d1" || $key == "d2" || $key == "d3" || $key == "d4" || $key == "d5" || $key == "d6" || $key == "d7" || $key == "d8" || $key == "d9" || $key == "d10" || $key == "d11" || $key == "d12" || $key == "d13" || $key == "d14" || $key == "d15" || $key == "d16" || $key == "d17" || $key == "d18" || $key == "d19" || $key == "d20") {$key = "Расходы для банкета";}
			if ($key == "s1" || $key == "s2" || $key == "s3" || $key == "s4" || $key == "s5" || $key == "s6" || $key == "s7" || $key == "s8" || $key == "s9" || $key == "s10" || $key == "s11" || $key == "s12" || $key == "s13" || $key == "s14" || $key == "s15" || $key == "s16" || $key == "s17" || $key == "s18" || $key == "s19" || $key == "s20") {$key = "Выездная церемония";}
			if ($key == "u1" || $key == "u2" || $key == "u3" || $key == "u4" || $key == "u5" || $key == "u6" || $key == "u7" || $key == "u8" || $key == "u9" || $key == "u10" || $key == "u11" || $key == "u12" || $key == "u13" || $key == "u14" || $key == "u15" || $key == "u16" || $key == "u17" || $key == "u18" || $key == "u19" || $key == "u20") {$key = "Услуги";}
			if ($key == "k1" || $key == "k2" || $key == "k3" || $key == "k4" || $key == "k5" || $key == "k6" || $key == "k7" || $key == "k8" || $key == "k9" || $key == "k10" || $key == "k11" || $key == "k12" || $key == "k13" || $key == "k14" || $key == "k15" || $key == "k16" || $key == "k17" || $key == "k18" || $key == "k19" || $key == "k20") {$key = "Прочие свадебные услуги";}
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
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adopt($form_subject), $message, $headers );
