<?php
/* Smarty version 3.1.36, created on 2023-10-06 15:01:23
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6520679396ad62_54145805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e34a5ba104d7f4685e93c96b2a3ba044bad2644' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/head.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6520679396ad62_54145805 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Styling -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/custom/img/brand-logo/favicon.ico" type="image/x-icon">
<link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'all.min.css'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'theme.min.css'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/css/fontawesome-all.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/custom/custom-light-theme.css" rel="stylesheet">

<?php echo '<script'; ?>
>
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.title"),$_smarty_tpl ) ));?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
        saved = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saved"),$_smarty_tpl ) ));?>
',
        saving = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saving"),$_smarty_tpl ) ));?>
',
        whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
",
        requiredText = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.required"),$_smarty_tpl ) ));?>
',
        recaptchaSiteKey = "<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->getSiteKey();
}?>";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'scripts.min.js'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'custom.js'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }
}
}
