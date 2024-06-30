<?php
/* Smarty version 3.1.36, created on 2024-01-26 00:00:11
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65b34a6b966c56_79872904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1706248811,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b34a6b966c56_79872904 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,

This is a notice to remind you that you have an invoice due on <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
. We tried to bill you automatically but were unable to because we don't have your credit card details on file.

Invoice Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>

Invoice #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>

Amount Due: <?php echo $_smarty_tpl->tpl_vars['invoice_total']->value;?>

Due Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>


Please login to our client area at the link below to submit your card details or make payment using a different method.

<?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>


<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
