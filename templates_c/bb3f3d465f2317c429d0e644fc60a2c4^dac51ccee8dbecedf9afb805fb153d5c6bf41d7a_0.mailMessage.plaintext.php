<?php
/* Smarty version 3.1.36, created on 2024-05-20 12:08:00
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_664b3d207b6ff8_83801745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1716206880,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664b3d207b6ff8_83801745 (Smarty_Internal_Template $_smarty_tpl) {
?>Your password has been reset.


If you did not request this reset, please <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
.


<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
