<?php

$leads_id = array();

	foreach($leads_list['leads'] as $leads) {
		array_push($leads_id, $leads['id']);
	}
	
// Раздел отладки
// echo '<pre>'; print_r($leads_id); echo '</pre>';
?>