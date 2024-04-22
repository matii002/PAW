<?php
/* Smarty version 4.5.1, created on 2024-04-01 12:33:52
  from 'C:\xampp\htdocs\php_04_obiektowosc\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660a8d909d95c8_01259467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3078312679617ab133aa2880313fdfd348dcb94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\calc_view.tpl',
      1 => 1711967623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a8d909d95c8_01259467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_231213270660a8d909abba1_09781987', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_231213270660a8d909abba1_09781987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_231213270660a8d909abba1_09781987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="POST">
        <fieldset>
            <label for="id1">Kwota kredytu: </label>
            <input id="id1" type="text" name="credit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit;?>
"/><br />
            <label for="id2">Ilość lat: </label>
            <input id="id2" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
"/><br />
            <label for="id3">Oprocentowanie (%):</label>
            <input id="id3" type="text" name="interestRate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interestRate;?>
"/><br />
            <input type="submit" value="Oblicz ratę"/>
        </fieldset>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <div class="pure-table pure-table-horizontal">
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
            <h4>Wynik</h4>
            <p class="res">
                <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

            </p>
        <?php }?>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
