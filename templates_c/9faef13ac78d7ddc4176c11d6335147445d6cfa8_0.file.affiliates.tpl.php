<?php
/* Smarty version 3.1.36, created on 2023-11-20 11:22:15
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/affiliates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_655b95c7d83a46_62954812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9faef13ac78d7ddc4176c11d6335147445d6cfa8' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/affiliates.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655b95c7d83a46_62954812 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['inactive']->value) {?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesdisabled'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['withdrawrequestsent']->value) {?>
        <div class="alert alert-success">
            <i class="fas fa-check fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliateswithdrawalrequestsuccessful'),$_smarty_tpl ) );?>

        </div>
    <?php }?>

    <div class="row">

        <div class="col-md-4">
            <div class="affiliate-stat affiliate-stat-green alert-warning mb-2">
                <i class="fas fa-users"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['visitors']->value;?>
</span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesclicks'),$_smarty_tpl ) );?>

            </div>
        </div>

        <div class="col-md-4">
            <div class="affiliate-stat affiliate-stat-green alert-info mb-2">
                <i class="fas fa-shopping-cart"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['signups']->value;?>
</span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatessignups'),$_smarty_tpl ) );?>

            </div>
        </div>

        <div class="col-md-4">
            <div class="affiliate-stat affiliate-stat-green alert-success mb-2">
                <i class="far fa-chart-bar"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['conversionrate']->value;?>
%</span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesconversionrate'),$_smarty_tpl ) );?>

            </div>
        </div>

    </div>

    <div class="card my-3">
        <div class="card-body">

            <p class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesreferallink'),$_smarty_tpl ) );?>
</p>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['referrallink']->value;?>
">

        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered table-striped table-rounded">
                <tr>
                    <td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatescommissionspending'),$_smarty_tpl ) );?>
:</td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['pendingcommissions']->value;?>
</strong></td>
                </tr>
                <tr>
                    <td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatescommissionsavailable'),$_smarty_tpl ) );?>
:</td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</strong></td>
                </tr>
                <tr>
                    <td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliateswithdrawn'),$_smarty_tpl ) );?>
:</td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['withdrawn']->value;?>
</strong></td>
                </tr>
            </table>
        </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['withdrawrequestsent']->value) {?>
        <p class="text-center">
            <a href="<?php echo $_SERVER['PHP_SELF'];?>
?action=withdrawrequest" class="btn btn-lg btn-danger<?php if (!$_smarty_tpl->tpl_vars['withdrawlevel']->value) {?> disabled" disabled="disabled<?php }?>">
                <i class="fas fa-university"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesrequestwithdrawal'),$_smarty_tpl ) );?>

            </a>
        </p>
        <?php if (!$_smarty_tpl->tpl_vars['withdrawlevel']->value) {?>
            <p class="text-muted text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"affiliateWithdrawalSummary",'amountForWithdrawal'=>$_smarty_tpl->tpl_vars['affiliatePayoutMinimum']->value),$_smarty_tpl ) );?>
</p>
        <?php }?>
    <?php }?>

    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesreferals'),$_smarty_tpl ) );?>
</h2>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"AffiliatesList"), 0, true);
?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            var table = jQuery('#tableAffiliatesList').show().DataTable();

            <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'regdate') {?>
                table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
            <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'product') {?>
                table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
            <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'amount') {?>
                table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
            <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
                table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
            <?php }?>
            table.draw();
            jQuery('#tableLoading').hide();
        });
    <?php echo '</script'; ?>
>
    <div class="table-container clearfix">
        <table id="tableAffiliatesList" class="table table-list w-hidden">
            <thead>
                <tr>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatessignupdate'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderproduct'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesamount'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatescommission'),$_smarty_tpl ) );?>
</th>
                    <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesstatus'),$_smarty_tpl ) );?>
</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['referrals']->value, 'referral');
$_smarty_tpl->tpl_vars['referral']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['referral']->value) {
$_smarty_tpl->tpl_vars['referral']->do_else = false;
?>
                <tr class="text-center">
                    <td><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['referral']->value['datets'];?>
</span><?php echo $_smarty_tpl->tpl_vars['referral']->value['date'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['referral']->value['service'];?>
</td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['referral']->value['amountnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['referral']->value['amountdesc'];?>
</td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['referral']->value['commissionnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['referral']->value['commission'];?>
</td>
                    <td><span class='label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['referral']->value['rawstatus']);?>
'><?php echo $_smarty_tpl->tpl_vars['referral']->value['status'];?>
</span></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <div class="text-center" id="tableLoading">
            <p><i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['affiliatelinkscode']->value) {?>
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliateslinktous'),$_smarty_tpl ) );?>
</h2>
        <div class="margin-bottom text-center">
            <?php echo $_smarty_tpl->tpl_vars['affiliatelinkscode']->value;?>

        </div>
    <?php }?>

<?php }
}
}
