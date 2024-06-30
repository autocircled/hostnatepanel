<?php
/* Smarty version 3.1.36, created on 2023-10-09 13:30:33
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/access-denied.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_652446c958c3b9_53719318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe7a07c207d12f5d5757a0fe1eea2861ce31b56' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/access-denied.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652446c958c3b9_53719318 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center">
    <div class="card py-3">
        <div class="card-body">
            <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'oops'),$_smarty_tpl ) );?>
!</h1>
            <div class="pb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subaccountpermissiondenied'),$_smarty_tpl ) );?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['allowedpermissions']->value)) {?>
                <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subaccountallowedperms'),$_smarty_tpl ) );?>
</div>
                <div class="list-group list-group-flush">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allowedpermissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>
                        <div class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['permission']->value;?>
</div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subaccountcontactmaster'),$_smarty_tpl ) );?>
</div>
        </div>
        <div class="buttons pt-2 pb-4">
            <a href="javascript:history.go(-1)" class="btn btn-primary">
                <i class="fas fa-arrow-circle-left"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'goback'),$_smarty_tpl ) );?>

            </a>
            <a href="index.php" class="btn btn-default">
                <i class="fas fa-home"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'returnhome'),$_smarty_tpl ) );?>

            </a>
        </div>
    </div>
</div>
<?php }
}
