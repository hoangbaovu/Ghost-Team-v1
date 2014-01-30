<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
	'css' => array('//frontend/css/bootstrap.min.css', '//frontend/style.css'),
	'js' => array('//frontend/js/jquery.min.js', '//frontend/js/bootstrap.min.js', '//frontend/js/jquery.chart.js', '//frontend/js/customs.js'),

	// Ghost

	'ghost.css' => array('//assets/css/bootstrap.min.css', '//assets/styles.css'),
	'ghost.js' => array('//assets/js/jquery.min.js', '//assets/js/bootstrap.min.js', '//assets/js/jquery.carouFredSel.js', '//assets/js/custom.js'),
);