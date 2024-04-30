<?php
/* Smarty version 4.5.1, created on 2024-03-25 16:45:33
  from 'C:\xampp\htdocs\szablonowanie_projekt\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66019c1d6c0056_10174509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a87c3cc6811c7b8a6d35e2fb67bb58adf8c461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szablonowanie_projekt\\app\\security\\login_view.tpl',
      1 => 1711381147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66019c1d6c0056_10174509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113244851966019c1d6adac3_24649613', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'content'} */
class Block_113244851966019c1d6adac3_24649613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113244851966019c1d6adac3_24649613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\szablonowanie_projekt\\lib\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/app/security/login.php" method="POST">
            <legend>Logowanie</legend>
            <fieldset>
                <label for="id_login">login: </label>
                <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
"/>
                <label for="id_pass">pass: </label>
                <input id="id_pass" type="password" name="pass" />
            </fieldset>
            <input type="submit" value="zaloguj"/>
        </form>

        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg', false, 'key');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
