<?php
/**
 * Input tag component for the Ad Hoc Forms plugin
 *
 * Defines  <input /> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_abstract extends syntax_plugin_adhoctags_abstractinline {

	protected $pluginName = 'adhocmathml';
	
	protected function registerTag() { return true;}

    function getPType(){ return 'normal';}

	/* sub-classes can overwrite this function: */
	protected function allowSpecificAttribute(&$name, &$value) { return false; }

	/* allow link attributes: */
	function allowAttribute(&$name, &$value) {
		//dbg('<td>:allowAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'displaystyle': 
				return (substr($value, 0, 11) !== 'javascript:');
				break;

			case 'mathbackground': /* colours */
			case 'mathcolor':
				return preg_match('/^[\w\d,\(\)#\% \/]+$/', trim($value));
				break;

			case 'mathsize':	/* font size specification */
				return preg_match('/^[\w\d\%]+$/', trim($value));
				break;

			case 'mathvariant':	/* font variant flag */
				return in_array(strtolower($value), array('normal','bold','italic','bold-italic','double-struck','bold-fraktur','script','bold-script','fraktur','sans-serif','bold-sans-serif','sans-serif-italic','sans-serif-bold-italic','monospace','initial','tailed','looped','stretched'));
				break;

			case 'scriptlevel':	/* sets the math-depth of an element  */
				return preg_match('/^[+-]?[\d]+$/', trim($value));
				break;

			case 'href': 
				return in_array(strtolower($value), array('true','false'));
				break;

			default:
				return $this->allowSpecificAttribute($name, $value);
		}
	}

}