<?php

namespace Controller;
use ItePHP\Framework\Core\Controller;

/**
 * Example controller.
 */
class BaseController extends Controller{
	
	/**
	 * Example action.
	 *
	 * @return array
	 */
	public function index(){
		return ["data"=>"Hello world."];
	}
}