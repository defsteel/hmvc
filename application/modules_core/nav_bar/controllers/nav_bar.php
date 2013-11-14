<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manage
 *
 * @author DEF
 */
class Nav_bar extends MX_Controller {

	public $string;
	
	

	public function __construct() {
		$this -> load -> helper('url');
		$this -> string = uri_string();
	}

	public function index() {
		$data['active'] = array(0 => 'NULL',
	1 => 'NULL',
	2 => 'NULL',
	3 => 'NULL',
	4 => 'NULL',
	5 => 'NULL',
	6 => 'NULL',
	7 => 'NULL',
	8 => 'NULL');
	
		
		
		$segments = explode('/', $this -> string);
		
		$count = count($segments);
		
		
			
			
			switch ($segments['0']) {
				case 'option 1':
					$data['active'][0] = 'active';
					break;
					
				case 'option 2':
					$data['active'][1] = 'active';
					break;
					
				case 'option 3':
					$data['active'][2] = 'active';
					break;
				
				case 'option 4':
					$data['active'][3] = 'active';
					break;
				
				case 'option 5':
					$data['active'][4] = 'active';
					break;
				
				case 'option 6':
					$data['active'][5] = 'active';
					break;
				
				case 'option 7':
					$data['active'][6] = 'active';
					break;
					
				case 'option 8':
					$data['active'][7] = 'active';
					break;
				
				default:
					
					break;
			}
			
		
		$this -> load -> view('nav_bar/bar', $data);
	}

}

