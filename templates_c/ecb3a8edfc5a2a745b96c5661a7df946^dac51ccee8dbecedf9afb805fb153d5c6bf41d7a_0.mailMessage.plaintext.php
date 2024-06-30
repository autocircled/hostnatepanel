<?php
/* Smarty version 3.1.36, created on 2024-01-03 23:53:56
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_659647f4c3faf7_11525013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1704347636,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659647f4c3faf7_11525013 (Smarty_Internal_Template $_smarty_tpl) {
?>Hi <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
,


Recently a request was submitted to reset your admin password. Follow the link below to reset it.


<?php echo $_smarty_tpl->tpl_vars['pw_reset_url']->value;?>



If you did not request a password reset, please ignore this email. The password reset link will expire in 2 hours.


<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_link']->value;
}
}
