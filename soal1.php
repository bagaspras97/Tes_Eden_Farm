<?php
$data = array(
0 => array(
'id' => 1,
'name' => 'Foo', 'image' => array(
'url' => '/pub/foo.jpg')
),
1 => array(
'id' => 2,
'name' => 'Bar', 'image' => array(
'url' => '/pub/bar.jpg' )
),
2 => array(
'id' => 3,
'name' => 'Foo Bar', 'image' => array(
'url' => '/pub/foobar.jpg' )
) );

function getResult($arr){
  $newArr = array();
  foreach($arr as $item){
  foreach($item['image'] as $image){
  array_push($newArr, $image);
  }
}
  return($newArr);
}

$result = getResult($data);

print_r($result);


?>