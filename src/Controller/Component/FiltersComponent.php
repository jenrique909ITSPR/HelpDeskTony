<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class FiltersComponent extends Component
{
 public function Filtrado($array_filter , $query)
 {
 	foreach ($array_filter as $key => $value) {

 		if (!empty($value)){
			$query->where([$key => $value]);
 		}
 	}
 	return $query;
 }
}