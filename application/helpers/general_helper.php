<?php defined('BASEPATH') OR exit('No direct script access allowed');

	if(!function_exists('dump')) {
		function dump($data)
		{
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
	}

	if(!function_exists('date_by_uri')) {
		function date_by_uri()
		{
			$date['jaar'] = $this->uri->segment(3);
			$date['maand'] = $this->uri->segment(4);
			$date['dag'] = $this->uri->segment(5);

			return $date = implode('-', $date);
		}
	}

	if(!function_exists('maanden_array')) {
		function maanden_array()
		{
			return array(1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');
		}
	}

	if(!function_exists('jaren_array')) {
		function jaren_array($start = 2000)
		{
			return array_combine(range(date("Y"), $start), range(date("Y"), $start));
		}
	}

	if(!function_exists('sort_array_by_key')) {
		function sort_array_by_key($input, $sortkey)
		{
			foreach($input as $key=>$val)
			{
				$output[$val[$sortkey]][]=$val;
			}

			return $output;
		}
	}

	if(!function_exists('array_to_dropdown')) {
		function array_to_dropdown($array)
		{
			foreach($array as $value)
			{
				$dropdown[current($value)] = next($value);
			}

			return $dropdown;
		}
	}
