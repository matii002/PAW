<?php
/* Smarty version 4.5.1, created on 2024-04-22 12:27:08
  from 'C:\xampp\htdocs\php_kontroler_glowny_b\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66263b7c9cdd14_73426050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5448d7254bae9c2bd09e254a6cce8287cedab0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kontroler_glowny_b\\app\\views\\LoginView.tpl',
      1 => 1713779918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66263b7c9cdd14_73426050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27709286566263b7c9c7524_73977941', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_27709286566263b7c9c7524_73977941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_27709286566263b7c9c7524_73977941',
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
            <input id="id_pass" type="text" name="pass"/><br />
            <input type="submit" value="zaloguj"/>
        </fieldset>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
