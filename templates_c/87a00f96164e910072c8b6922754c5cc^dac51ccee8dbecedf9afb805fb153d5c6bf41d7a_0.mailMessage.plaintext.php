<?php
/* Smarty version 3.1.36, created on 2024-04-04 09:00:09
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660e6c190ff6c8_01012646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1712221209,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660e6c190ff6c8_01012646 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,

This is a notification that your service has now been suspended.  The details of this suspension are below:

Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>

<?php if ($_smarty_tpl->tpl_vars['service_domain']->value) {?>Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>

<?php }?>Amount: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>

Due Date: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>

Suspension Reason: <?php echo $_smarty_tpl->tpl_vars['service_suspension_reason']->value;?>


Please contact us as soon as possible to get your service reactivated.

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
