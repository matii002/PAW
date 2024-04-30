<?php
/* Smarty version 4.5.1, created on 2024-04-22 12:09:19
  from 'C:\xampp\htdocs\php_kontroler_glowny_b\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6626374fa496f4_27310680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fbae43e0cad4246b3f2a34e801d2e5093c578c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_kontroler_glowny_b\\app\\views\\templates\\messages.tpl',
      1 => 1713780443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6626374fa496f4_27310680 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div class="messages error">
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages inf bottom-margin">
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'infos');
$_smarty_tpl->tpl_vars['infos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['infos']->value) {
$_smarty_tpl->tpl_vars['infos']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['infos']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    </div>
<?php }
}
}
