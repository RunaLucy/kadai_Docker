<?php
/**
 *  {$action_path}
 *
 *  @author     {$author}
 */

/**
 *  {$action_name} Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 */
class {$action_form} extends {$project_id}_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    protected $form = array();
}

/**
 *  {$action_name} action implementation.
 *
 *  @author     {$author}
 *  @access     public
 */
class {$action_class} extends {$project_id}_ActionClass
{
    /**
     *  preprocess of {$action_name} Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    public function prepare()
    {
        return null;
    }

    /**
     *  {$action_name} action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
        return array('json', array('a', 'b'));
    }
}

