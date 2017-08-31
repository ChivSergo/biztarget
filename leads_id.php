<?php

$leads_id = array();

/*
	foreach($leads_list['leads'] as $leads) {
		array_push($leads_id, $leads['id']);
	}
*/
	
// Записываем в массив ID сделок, у которых нет задач.
/*
foreach($leads_list['leads'] as $leads) {
		if ($leads['closest_task'] == 0) {
			array_push($leads_id, $leads['id']);
		}
	}
*/

// Проверяем, есть ли доступ к данным и записываем в массив ID сделок, у которых нет задач.
if(isset($leads_list['leads'])) {
	
	foreach($leads_list['leads'] as $leads) {
		if(is_array($leads) && isset($leads['id'])) {
			if ($leads['closest_task'] == 0) {
				array_push($leads_id, $leads['id']);
			}
		} else {
			die('Невозможно получить поле "ID сделки"');
		} 
	}

} else {
	die('Невозможно получить "Список сделок"');
}
	
// Раздел отладки
echo '<pre>'; print_r($leads_id); echo '</pre>';
?>