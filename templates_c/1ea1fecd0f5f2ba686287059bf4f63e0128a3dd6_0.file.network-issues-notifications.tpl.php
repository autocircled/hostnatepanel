<?php
/* Smarty version 3.1.36, created on 2023-10-06 15:01:23
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/network-issues-notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6520679398fda0_93185388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ea1fecd0f5f2ba686287059bf4f63e0128a3dd6' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/network-issues-notifications.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6520679398fda0_93185388 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['open'] > 0) {?>
    <div class="alert alert-warning network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-exclamation-triangle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesAware'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['scheduled'] > 0) {?>
    <div class="alert alert-info network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-info-circle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesScheduled'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
<?php }
}
}
