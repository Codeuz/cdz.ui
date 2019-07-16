<?php

/**
 * MAIN
 */

if (!function_exists('ui_doctype')) {

	/**
	 * Doctype for Bootstrap 4
	 * 
	 * @return string
	 */
	function ui_doctype() {
		return '<!doctype html>';
	}
}

if (!function_exists('ui_lang')) {

	/**
	 * Current Lang
	 * 
	 * @return string
	 */
	function ui_lang() {
		return Lang::locale();
	}
}

if (!function_exists('ui_charset')) {

	/**
	 * Meta Charset
	 * 
	 * @param  string
	 * @return string
	 */
	function ui_charset($charset = 'utf-8') {
		return '<meta charset="'.$charset.'">';
	}
}

if (!function_exists('ui_viewport')) {

	/**
	 * Meta viewport
	 * 
	 * @return string
	 */
	function ui_viewport() {
		return '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
	}
}


if (!function_exists('ui_style')) {

	/**
	 * Load CSS Asset
	 * 
	 * @param  string
	 * @param  boolean
	 * @param  array
	 * @return string
	 */
	function ui_style($filename, $relative = true, $attributes = array()) {
		
		if ($filename == 'bootstrap') {
			return ui_style(
				'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', 
				false, 
				['integrity' => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T', 'crossorigin' => 'anonymous']
			);
		}
		
		if ($relative) {
			$filename = url($filename);
		}
		
		$r = '<link rel="stylesheet" href="'.$filename.'"';
		foreach ($attributes as $k => $v) {
			$r.= ' '.$k.'="'.$v.'"';
		}
		$r .=' />';
		return $r;
	}
}

if (!function_exists('ui_script')) {

	/**
	 * Load JS Asset
	 * 
	 * @param  string
	 * @param  boolean
	 * @param  array
	 * @return string
	 */
	function ui_script($filename, $relative = true, $attributes = array()) {
		
		if ($filename == 'bootstrap') {
			return 
			ui_script(
				'https://code.jquery.com/jquery-3.3.1.slim.min.js', 
				false, 
				['integrity' => 'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo', 'crossorigin' => 'anonymous']
			).
			ui_script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', 
				false, 
				['integrity' => 'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1', 'crossorigin' => 'anonymous']
			).
			ui_script('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', 
				false, 
				['integrity' => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM', 'crossorigin' => 'anonymous']
			);
		}
		
		if ($relative) {
			$filename = url($filename);
		}
		
		$r = '<script src="'.$filename.'"';
		foreach ($attributes as $k => $v) {
			$r.= ' '.$k.'="'.$v.'"';
		}
		$r .=' ></script>';
		return $r;
	}
}