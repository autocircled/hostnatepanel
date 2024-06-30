<?php
/* Smarty version 3.1.36, created on 2024-03-19 08:00:57
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/viewemail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65f94639d55b94_81945950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b5cffb6421fb87875daac49abaa37183a35e2d9' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/viewemail.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f94639d55b94_81945950 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaemails'),$_smarty_tpl ) );?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</head>
<body id="popup-backdrop">
    <div class="card bg-default">
        <div class="card-header">
            <h2 class="popup-header-padding"><i class='far fa-envelope'>&nbsp;</i><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</h2>
            <?php if (count($_smarty_tpl->tpl_vars['attachments']->value) > 0) {?>
                <div class="popup-header-padding">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments']->value, 'attachedFile', true);
$_smarty_tpl->tpl_vars['attachedFile']->iteration = 0;
$_smarty_tpl->tpl_vars['attachedFile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachedFile']->value) {
$_smarty_tpl->tpl_vars['attachedFile']->do_else = false;
$_smarty_tpl->tpl_vars['attachedFile']->iteration++;
$_smarty_tpl->tpl_vars['attachedFile']->last = $_smarty_tpl->tpl_vars['attachedFile']->iteration === $_smarty_tpl->tpl_vars['attachedFile']->total;
$__foreach_attachedFile_0_saved = $_smarty_tpl->tpl_vars['attachedFile'];
?>
                        <i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->tpl_vars['attachedFile']->value;
if (!$_smarty_tpl->tpl_vars['attachedFile']->last) {?><br><?php }?>
                    <?php
$_smarty_tpl->tpl_vars['attachedFile'] = $__foreach_attachedFile_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
        </div>
        <div class="card-body">
            <iframe width="100%" height="380" frameborder="0" srcdoc="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
"></iframe>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-primary" onclick="window.close()">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'closewindow'),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>
</body>
</html>
<?php }
}
