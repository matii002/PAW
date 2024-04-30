<?php
/* Smarty version 4.5.1, created on 2024-04-23 19:59:24
  from 'C:\xampp\htdocs\php_06_routing\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6627f6fc57fca6_49776082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0e8565926df570e8f93b1760a86ca733b14b97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_routing\\app\\views\\LoginView.tpl',
      1 => 1713800426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6627f6fc57fca6_49776082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12637658266627f6fc570395_31635339', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_12637658266627f6fc570395_31635339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12637658266627f6fc570395_31635339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="POST">
        <fieldset>
            <label for="id_login">login: </label>
            <input id="id_login" type="text" name="login"/><br />

            <label for="id_pass">hasło: </label>
            <input id="id_pass" type="password" name="pass"/><br />
            <input type="submit" value="zaloguj"/>
        </fieldset>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
