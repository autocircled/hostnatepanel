<?php
/* Smarty version 3.1.36, created on 2024-01-04 02:00:10
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6596658adb46b6_71970580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e71ccad6d6f881ef532401c3364fc86ed599bd' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/panel.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6596658adb46b6_71970580 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row w-100 mx-auto mb-3">
    <div class="card w-100">
        <?php if ((isset($_smarty_tpl->tpl_vars['headerTitle']->value))) {?>
            <div class="card-title py-1 px-2 text-white font-weight-bold bg-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['headerTitle']->value;?>

            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['bodyContent']->value))) {?>
            <div class="card-text<?php if ((isset($_smarty_tpl->tpl_vars['bodyTextCenter']->value))) {?> text-center<?php }?> mx-2 mb-3">
                <?php echo $_smarty_tpl->tpl_vars['bodyContent']->value;?>

            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['footerContent']->value))) {?>
            <div class="card-footer<?php if ((isset($_smarty_tpl->tpl_vars['footerTextCenter']->value))) {?> text-center<?php }?> mx-2 mb-3">
                <?php echo $_smarty_tpl->tpl_vars['footerContent']->value;?>

            </div>
        <?php }?>
    </div>
</div>
<?php }
}
