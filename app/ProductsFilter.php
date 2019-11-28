<?php

namespace App;



class ProductsFilter extends QueryFilter
{

	public function name($value){

		$this->builder->where('name', 'like', "%$value%");

	}

	public function is_active($value){

		$this->builder->where('is_active', $value);

	}

	public function birthday($value){

		if ( ! $value ) {
			return;
		}

		$this->builder->whereHas('info', function($query) use ($value){

    			$query->where('birthday', '>', $value);

    		});

	}

	public function gender($value){

		$this->builder->where('gender', $value);

	}

}
