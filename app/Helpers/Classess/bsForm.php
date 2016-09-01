<?php 

namespace App\Helpers\Classess;

/**
* 
*/
class bsForm 
{
	

	public static function open($options =[])
	{
		return view('Helpers.bsForm.open',compact('options'))->render();
	}


	public static function close()
	{
		return view('Helpers.bsForm.close')->render();
	}


	public static function text()
	{
		return view('Helpers.bsForm.text')->render();
	}


    
}





?>