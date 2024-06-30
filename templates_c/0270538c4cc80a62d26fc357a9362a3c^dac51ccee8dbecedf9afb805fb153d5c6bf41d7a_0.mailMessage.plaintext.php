<?php
/* Smarty version 3.1.36, created on 2024-01-04 04:45:13
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65968c39968827_60320746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1704365113,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65968c39968827_60320746 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,

Thank you for contacting our support team. A support ticket has now been opened for your request. You will be notified when a response is made by email. The details of your ticket are shown below.

Subject: <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;?>

Priority: <?php echo $_smarty_tpl->tpl_vars['ticket_priority']->value;?>

Status: <?php echo $_smarty_tpl->tpl_vars['ticket_status']->value;?>


You can view the ticket at any time at <?php echo $_smarty_tpl->tpl_vars['ticket_link']->value;?>


<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
