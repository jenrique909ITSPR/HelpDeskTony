<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class FiltersComponent extends Component
{
 public function Filtrado($array_filter , $query) {
 	foreach ($array_filter as $key => $value) {
 		if (!empty($value)){
	        if (strpos($key,"%") === false){
	            $query->where([$key => $value]);
	        }else{
	        	$split = explode("%", $key);
	            $query->where([$split[1].' LIKE' => '%'.$value.'%']);
	        }
 		}
 	} 	
 	return $query;
 }
}
