<?php
/* Smarty version 3.1.36, created on 2024-01-03 23:54:41
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65964821e775a5_29090800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1704347681,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65964821e775a5_29090800 (Smarty_Internal_Template $_smarty_tpl) {
?>Hi <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
,


This is a confirmation that your admin password has now been reset.


If you did not initiate this password reset, please notify your system administrator immediately.


<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_link']->value;
}
}
