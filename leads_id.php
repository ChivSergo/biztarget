<?php

$leads_id = array();

	foreach($leads_list['leads'] as $leads) {
		array_push($leads_id, $leads['id']);
	}

	
// Разрабатываю то же действие, но с отловом возможных ошибок
/*
if(isset($leads_list['leads']) {
	
	foreach($leads_list['leads'] as $leads) {
		if(is_array($leads) && isset($leads['id']) {
			array_push($leads_id, $leads['id']);
		} else {
			die('Невозможно получить поле "ID сделки"');
		} 
	}

} else {
	die('Невозможно получить "Список сделок"');
}
*/

	
// Раздел отладки
// echo '<pre>'; print_r($leads_id); echo '</pre>';
?>