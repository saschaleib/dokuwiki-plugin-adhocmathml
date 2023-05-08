<?php
/**
 * Math Table (matrix) Row element for the Ad-Hoc MathML plugin
 *
 * Defines  <mtr> ... </mtr> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mtr
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mtr extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mtr';

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