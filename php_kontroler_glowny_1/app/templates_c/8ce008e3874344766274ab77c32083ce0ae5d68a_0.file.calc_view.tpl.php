<?php
/* Smarty version 4.5.1, created on 2024-03-25 16:34:36
  from 'C:\xampp\htdocs\szablonowanie_projekt\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6601998c7d5484_03277756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce008e3874344766274ab77c32083ce0ae5d68a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szablonowanie_projekt\\app\\calc_view.tpl',
      1 => 1711282674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601998c7d5484_03277756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3000219396601998c7c20b1_11568500', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_3000219396601998c7c20b1_11568500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3000219396601998c7c20b1_11568500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\szablonowanie_projekt\\lib\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div style="width:90%; margin: 2em 2em 2em 20em;">	<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" >Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">    <form action="<?php echo $_smarty_tpl->tpl_vars['app_root']->value;?>
/app/calc.php" method="POST" >
        <fieldset >            <label for="id1">Kwota kredytu: </label>
            <input id="id1" type="text" name="credit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['credit'];?>
"/><br />
            <label for="id2">Ilość lat: </label>
            <input id="id2" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
"/><br />
            <label for="id3">Oprocentowanie (%):</label>
            <input id="id3" type="text" name="interestRate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['interestRate'];?>
"/><br />
            <input type="submit" value="Oblicz ratę" class="pure-form pure-form-stacked" />
        </fieldset>
    </form>

    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
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

        <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
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

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h4>Wynik</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </p>
    <?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
