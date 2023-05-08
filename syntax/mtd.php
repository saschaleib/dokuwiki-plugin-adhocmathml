<?php
/**
 * Math Table (matrix) Cell element for the Ad-Hoc MathML plugin
 *
 * Defines  <mtd> ... </mtd> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mtd
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mtd extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mtd';

	/* allow link attributes: */
	function allowSpecificAttribute(&$name, &$value) {
		//dbg('MathML: <mtd> - allowSpecificAttribute(' . $name . ', "' . $value . '")');
		
		switch (trim($name)) {
			case 'colspan':
			case 'rowspan':
				if (is_numeric(trim($value))) {
					$value = intval($value);
					return ($value > 0 && $value < 100);
				}
				break;
			default:
				return false;
		}
	}

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		
		$helper = $this->loadHelper('adhoctags', true);
		$attr = $helper->getAttributes($data);
		
		$rows = ( array_key_exists('rowspan', $attr) ? intval($attr['rowspan']) : 1 );
		$cols = ( array_key_exists('colspan', $attr) ? intval($attr['colspan']) : 1 );
		
		$renderer->tablecell_open($cols, null, $rows);

    }
    function renderODTElementClose($renderer, $element) {
		$renderer->tablecell_close();
    }
}