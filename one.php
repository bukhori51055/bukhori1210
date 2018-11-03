<?php 
$json = array(
		'item_Id' => '12341822',
		'itemName'=> 'desk',
		'price'=> 700000,
		'freeShiping' => true,
		'ratings'=>array(
						'rater'=>array(
									'Akmal'=>array(
												'score' => 4),
									'Andi'=>array(
												'score' => 5))),
		'color'=>array(
					'brown', 'black' )
	
	);

echo json_encode($json, JSON_PRETTY_PRINT);

?>
