<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('assets'))
{

	//if $str is a string include url or path
	//id $str is a array include all url and path

	function js($str){

		$js = '';

		if (is_array($str)) {
			foreach ($str as $s) {
				if(filter_var($s, FILTER_VALIDATE_URL)){ 
 					$js .= '<script src="'.$s.'" type="text/javascript"></script>';
				}else{
					$js .= '<script src="'.site_url('assets/js/'.$s).'" type="text/javascript"></script>';
				}
	
			}
		}else{
			if(filter_var($str, FILTER_VALIDATE_URL)){ 
 				$js .= '<script src="'.$str.'" type="text/javascript"></script>';
			}else{
				$js .= '<script src="'.site_url('assets/js/'.$str).'" type="text/javascript"></script>';
			}
			
		}

		return $js;

	}

	function css($str){

		$css = '';

		if (is_array($str)) {
			foreach ($str as $s) {
				if(filter_var($s, FILTER_VALIDATE_URL)){ 
					$css .= '<link rel="stylesheet" href="'.$s.'">';
				}else{
					$css .= '<link rel="stylesheet" href="'.site_url('assets/css/'.$s).'">';
				}	
			}
		}else{
			if(filter_var($str, FILTER_VALIDATE_URL)){ 
 				$css .= '<link rel="stylesheet" href="'.$str.'">';
			}else{
				$css .= '<link rel="stylesheet" href="'.site_url('assets/css/'.$str).'">';
			}
			
		}

		return $css;

	}


}
