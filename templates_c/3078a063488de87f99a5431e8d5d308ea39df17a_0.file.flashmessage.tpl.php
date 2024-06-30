<?php
/* Smarty version 3.1.36, created on 2023-10-06 14:35:04
  from '/var/www/panel.hostnate.com/templates/twenty-one/includes/flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65206168bbe8c8_32190121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3078a063488de87f99a5431e8d5d308ea39df17a' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/twenty-one/includes/flashmessage.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65206168bbe8c8_32190121 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }
if ((isset($_smarty_tpl->tpl_vars['align']->value))) {?> text-<?php echo $_smarty_tpl->tpl_vars['align']->value;
}?>">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

    </div>
<?php }
}
}
