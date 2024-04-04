<?php
/**
 * Fraction element for the Ad-Hoc MathML plugin
 *
 * Defines  <mfrac> ... </mfrac> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mfrac
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mfrac extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mfrac';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <mfrac> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'linethickness':  /* length-percentages */
				return preg_match('/^[\w\d\%]+$/', trim($value));
				break;

			case 'bevelled':  /* empty attribute or boolean */
				return in_array(strtolower(trim($value)), array('true','','bevelled'));
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