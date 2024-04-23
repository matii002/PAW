<?php
/* Smarty version 4.5.1, created on 2024-04-23 20:07:17
  from 'C:\xampp\htdocs\php_06_routing\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6627f8d53faee7_38555060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff2b01cbd6323d85cb28a47afa1595453e2a2e15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_routing\\app\\views\\calc_view.tpl',
      1 => 1713799908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6627f8d53faee7_38555060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6482292706627f8d53ef6f5_99302784', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_6482292706627f8d53ef6f5_99302784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6482292706627f8d53ef6f5_99302784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a>
    <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>
<div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="POST">
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
        <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
