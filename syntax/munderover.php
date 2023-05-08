<?php
/**
 * Math Under+Overscript element for the Ad-Hoc MathML plugin
 *
 * Defines  <munderover> ... </munderover> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mover
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_munderover extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'munderover';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <munderover> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'accent':
			case 'accentunder':
				return in_array(strtolower($value), array('true','false'));
				break;

			default:
				return false;
		}
	}

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		//$renderer->table_open();
    }
    function renderODTElementClose($renderer, $element) {
		//$renderer->table_close();
    }
}