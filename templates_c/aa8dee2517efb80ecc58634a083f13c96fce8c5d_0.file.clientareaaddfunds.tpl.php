<?php
/* Smarty version 3.1.36, created on 2024-01-05 12:57:28
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/clientareaaddfunds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65985118bfc053_06406120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8dee2517efb80ecc58634a083f13c96fce8c5d' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/clientareaaddfunds.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65985118bfc053_06406120 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addfundsdisabled']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaaddfundsdisabled'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
} elseif ($_smarty_tpl->tpl_vars['notallowed']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaaddfundsnotallowed'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_prefixVariable2,'textcenter'=>true), 0, true);
} elseif ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value,'textcenter'=>true), 0, true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['addfundsdisabled']->value) {?>

    <div class="row">

        <div class="col-md-8 offset-md-2">
            <div class="card">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td class="textright"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addfundsminimum'),$_smarty_tpl ) );?>
</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['minimumamount']->value;?>
</td>
                        </tr>
                        <tr>
                            <td class="textright"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addfundsmaximum'),$_smarty_tpl ) );?>
</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['maximumamount']->value;?>
</td>
                        </tr>
                        <tr>
                            <td class="textright"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addfundsmaximumbalance'),$_smarty_tpl ) );?>
</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['maximumbalance']->value;?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=addfunds">
                        <fieldset>
                            <div class="form-group">
                                <label for="amount" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addfundsamount'),$_smarty_tpl ) );?>
:</label>
                                <input type="text" name="amount" id="amount"
                                       value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="paymentmethod" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpaymentmethod'),$_smarty_tpl ) );?>
:</label><br/>
                                <select name="paymentmethod" id="paymentmethod" class="form-control custom-select">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
"><?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addfunds'),$_smarty_tpl ) );?>

                            </button>
                        </fieldset>
                    </form>
                </div>
                <div class="card-footer">
                    <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addfundsnonrefundable'),$_smarty_tpl ) );?>
</small>
                </div>
            </div>
        </div>

    </div>

<?php }
}
}
