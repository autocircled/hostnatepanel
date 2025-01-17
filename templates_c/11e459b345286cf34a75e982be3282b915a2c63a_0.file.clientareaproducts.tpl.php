<?php
/* Smarty version 3.1.36, created on 2023-10-06 15:48:15
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/clientareaproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6520728fa944c9_59461846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11e459b345286cf34a75e982be3282b915a2c63a' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/clientareaproducts.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6520728fa944c9_59461846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"ServicesList",'filterColumn'=>"4",'noSortColumns'=>"0"), 0, true);
?>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        var table = jQuery('#tableServicesList').show().DataTable();

        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'product') {?>
            table.order([1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [4, 'asc']);
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'amount' || $_smarty_tpl->tpl_vars['orderby']->value == 'billingcycle') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'nextduedate') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'domainstatus') {?>
            table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').hide();
    });
<?php echo '</script'; ?>
>

<div class="table-container clearfix">
    <table id="tableServicesList" class="table table-list w-hidden">
        <thead>
            <tr>
                <th></th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderproduct'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaaddonpricing'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingnextduedate'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareastatus'),$_smarty_tpl ) );?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
', false)">
                    <td class="py-0 text-center<?php if ($_smarty_tpl->tpl_vars['service']->value['sslStatus']) {?> ssl-info<?php }?>" data-element-id="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" data-type="service"<?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?> data-domain="<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['service']->value['sslStatus']) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['service']->value['sslStatus']->getImagePath();?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['service']->value['sslStatus']->getTooltipContent();?>
" class="<?php echo $_smarty_tpl->tpl_vars['service']->value['sslStatus']->getClass();?>
" width="25">
                        <?php } elseif (!$_smarty_tpl->tpl_vars['service']->value['isActive']) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/ssl/ssl-inactive-domain.png" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.sslInactiveService'),$_smarty_tpl ) );?>
" width="25">
                        <?php }?>
                    </td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?><br /><a href="http://<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</a><?php } else { ?><br />-<?php }?></td>
                    <td class="text-center" data-order="<?php echo $_smarty_tpl->tpl_vars['service']->value['amountnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
 <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</small></td>
                    <td class="text-center"><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>
</td>
                    <td class="text-center"><span class="label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
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
<?php }
}
