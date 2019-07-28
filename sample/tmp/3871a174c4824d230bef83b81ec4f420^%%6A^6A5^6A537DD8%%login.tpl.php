<?php /* Smarty version 2.6.31, created on 2019-07-28 04:24:40
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'message', 'login.tpl', 5, false),)), $this); ?>
<form action="." method="post">
  <table border="0">
    <tr>
      <td>メールアドレス</td>
	<td><input type="text" name="mailaddress" value="<?php echo $this->_tpl_vars['form']['mailaddress']; ?>
"><?php echo smarty_function_message(array('name' => 'mailaddress'), $this);?>
</td>
    </tr>
    <tr>
      <td>パスワード</td>
      <td><input type="password" name="password" value=""><?php echo smarty_function_message(array('name' => 'password'), $this);?>
</td>
    </tr>
  </table>
  <p>
  <input type="submit" name="action_login_do" value="ログイン">
  </p>
</form>