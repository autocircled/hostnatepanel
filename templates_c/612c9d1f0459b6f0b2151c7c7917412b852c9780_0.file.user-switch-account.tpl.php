<?php
/* Smarty version 3.1.36, created on 2023-10-09 13:23:04
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/user-switch-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65244508ebee68_05483413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612c9d1f0459b6f0b2151c7c7917412b852c9780' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/user-switch-account.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65244508ebee68_05483413 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mw-540">
    <div class="card-body">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['accounts']->value->count() == 0) {?>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"switchAccount.noneFound"),$_smarty_tpl ) );?>
</p>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"switchAccount.createInstructions"),$_smarty_tpl ) );?>
</p>
            <p>
                <a href="<?php echo routePath('cart-index');?>
" class="btn btn-default">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"shopNow"),$_smarty_tpl ) );?>

                </a>
            </p>
            <br><br>
        <?php } else { ?>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"switchAccount.choose"),$_smarty_tpl ) );?>
</p>

            <div class="select-account">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['account']->value->status == 'Closed') {?> class="disabled"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['account']->value->displayName;?>

                        <?php if ($_smarty_tpl->tpl_vars['account']->value->authedUserIsOwner()) {?>
                            <span class="label label-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientOwner"),$_smarty_tpl ) );?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['account']->value->status == 'Closed') {?>
                            <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['account']->value->status;?>
</span>
                        <?php }?>
                    </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
</div>

<form method="post" action="<?php echo routePath('user-accounts');?>
">
    <input type="hidden" name="id" value="" id="inputSwitchAcctId">
</form>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('.select-account a').click(function(e) {
            e.preventDefault();
            $('#inputSwitchAcctId').val($(this).data('id'))
                .parent('form').submit();
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
