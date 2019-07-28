<?php
// vim: foldmethod=marker
/**
 *  Sample1_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Sample1
 */

// {{{ Sample1_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Sample1
 *  @access     public
 */
class Sample1_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Sample1_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}
// }}}

