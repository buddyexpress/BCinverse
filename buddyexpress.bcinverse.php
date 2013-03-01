<?php
//#!/usr/bin/buddyexpress/start
/**
 * Buddyexpress Character Inverse
 *
 * @package   BCinverse
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2013 BUDDYEXPRESS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://www.buddyexpress.net/bcinverse/
 * @Version   BCinverse 1.0.0
 * @File      buddyexpress.bcinverse.php encoding UTF-8
 * @Contributors @file contributors.md
 */
//(get::apache_modules('buddyexpress') && get::php_extension('buddyexpress'))==run
/**
  BCinverse Get Variables and Replace
  $get_input = a method which you are getting input, GET or POST or REQIEST.
  Make sure getting input is secure.
  $params = which character is need to replace with what.
*/ 
ini_set('display_errors','off'); 
function buddyexpress_bcinverse($get_input, $params = array(), $method = NULL){
if($method  == 1){$strc = $get_input;} else {$strc = strtolower($get_input); } 
		if (!$strc) {return FALSE;}
		foreach ($params as $k => $v) {$strc = str_replace($k, $v, $strc);}
		$result =  $strc;
		if (!$result) {return FALSE;}
		return $result;
}
/**
  BCinverse chars list function
  $get_input = a method which you are used for getting input, GET or POST or REQUEST.
  Make sure getting input is secure.
  We used html entities.
  return = result;
*/ 
function buddyexpress_bcinverse_result($get_input = ''){
if(!empty($get_input)){
$params = array('a' => '&#592;','b' => 'q','c' => '&#596;','e' => '&#477;','f' => '&#607;','g' => '&#387;','h' => '&#613;','i' => '&#305;','j' => '&#638;','k' => '&#670;','l' => 'l','m' => '&#623;','n' => 'u','o' => 'o','p' => 'd','q' => 'b','r' => '&#633;',
's' => 's','t' => '&#647;','u' => 'u','v' => '&#652;','w' => '&#653;','x' => 'x','y' => '&#654;','z' => 'z','d' => 'p','!' => '&iexcl;');
       return  buddyexpress_bcinverse($get_input,$params);
    }
}
/**
  BCinverse chars list function
  $get_input = a method which you are used for getting input, GET or POST or REQUEST.
  Make sure getting input is secure.
  return = result;
*/ 
function buddyexpress_bcinverse_reset($get_input = ''){
if(!empty($get_input)){
$params = array('ɐ' => 'a','q' => 'b','ɔ' => 'c','p' => 'd','ǝ' => 'e','ɟ' => 'f','ƃ' => 'g','ɥ' => 'h','ı' => 'i','ɾ' => 'j','ʞ' => 'k','l' => 'l','ɯ' => 'm','u' => 'n','o' => 'o','d' => 'p','b' => 'q','ɹ' => 'r','ʇ' => 't','n' => 'u','ʌ' => 'v','ʍ' => 'w',
'x' => 'x','ʎ' => 'y','z' => 'z','¡' => '!');
       return  buddyexpress_bcinverse($get_input, $params, 1);
    }
}
