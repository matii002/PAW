<?php
/* Smarty version 4.5.1, created on 2024-04-22 17:42:05
  from 'C:\xampp\htdocs\php_6_1\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6626854d85a9e1_56114862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4b93bc04f092d11eaa131fed7624fdc24c486c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_6_1\\app\\views\\LoginView.tpl',
      1 => 1713800426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6626854d85a9e1_56114862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16043894566626854d854221_82641656', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_16043894566626854d854221_82641656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16043894566626854d854221_82641656',
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
