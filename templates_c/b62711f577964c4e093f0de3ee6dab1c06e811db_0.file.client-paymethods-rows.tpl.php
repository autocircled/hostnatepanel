<?php
/* Smarty version 3.1.36, created on 2023-10-07 07:01:48
  from '/var/www/panel.hostnate.com/admin/templates/blend/client-paymethods-rows.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_652148ac4fdd51_29648259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b62711f577964c4e093f0de3ee6dab1c06e811db' => 
    array (
      0 => '/var/www/panel.hostnate.com/admin/templates/blend/client-paymethods-rows.tpl',
      1 => 1696537051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652148ac4fdd51_29648259 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payMethods']->value, 'payMethod', false, 'i');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2) {?>altrow<?php }?>">
        <td class="client-paymethod<?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isUsingInactiveGateway']) {?> gateway-inactive<?php }?>">
            <a id="btnPayMethodDetails<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['id'];?>
"
               href="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['url'];?>
"
               data-modal-title="Pay Method Details"
               data-btn-submit-id="savePaymentMethod"
               data-btn-submit-label="<?php echo AdminLang::trans('global.savechanges');?>
"
               data-role="edit-paymethod"
               onclick="return false;"
               <?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isUsingInactiveGateway']) {?>
               title="<?php echo AdminLang::trans('clientsummary.payMethodGatewayInactive');?>
"
               <?php }?>
               class="paymethod-description open-modal">
                <i class="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['iconClass'];?>
"></i>
                &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['description'];?>

                <?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isDefault']) {?><i class="pull-right fal fa-user-check">&nbsp;&nbsp;</i><?php }?>
            </a>
        </td>
    </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['payMethod']->do_else) {
?>
    <tr>
        <td align="center">No Pay Methods</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
