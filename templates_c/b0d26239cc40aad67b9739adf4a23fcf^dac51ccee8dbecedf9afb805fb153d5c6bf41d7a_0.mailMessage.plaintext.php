<?php
/* Smarty version 3.1.36, created on 2024-03-23 16:24:28
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65ff023c9b4f50_52912601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1711211068,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ff023c9b4f50_52912601 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,


This is a notification that your service has now been unsuspended. The details of this unsuspension are below:


Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>

<?php if ($_smarty_tpl->tpl_vars['service_domain']->value) {?>Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>

<?php }?>Amount: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>

Due Date: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>



<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
