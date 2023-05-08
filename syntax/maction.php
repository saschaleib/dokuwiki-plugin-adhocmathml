<?php
/**
 * Math Action element for the Ad-Hoc MathML plugin
 *
 * Defines  <maction> ... </maction> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/maction
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_maction extends syntax_plugin_adhocmathml_abstract {

	/* NOTE: The use of this element is no longer recommended. It is added here for completeness only! */

	protected $tag = 'maction';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <maction> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			
			case 'selection':
				return true;
				break;
	
			case 'actiontype':
				return in_array(strtolower($value), array('statusline','toggle'));
				break;

			default:
				return false;
		}
	}

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		$renderer->tablerow_open();
    }
    function renderODTElementClose($renderer, $element) {
		$renderer->tablerow_close();
    }
}