<?php

namespace App;



class UsersFilter
{
	protected $builder;
	protected $request;


	public function __construct($builder, $request)

	{

		$this->builder = $builder;
		$this->request = $request;

	}


	public function apply()
	{
		//dd($this->filters());

		//return $this->builder;

		foreach ($this->filters() as $filter => $value){

			if (method_exists($this, $filter)){

				$this->$filter($value);
			}
		}

		return $this->builder;
	}

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

	public function filters()
	{
		return $this->request->all();
	}
}
