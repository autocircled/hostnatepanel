<?php
/* Smarty version 3.1.36, created on 2023-10-06 15:01:23
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/verifyemail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6520679399cff0_49087083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '314c3cebc601460b63425e7898a2769cdc8c6b0a' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/includes/verifyemail.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6520679399cff0_49087083 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showEmailVerificationBanner']->value) {?>
    <div class="verification-banner email-verification">
        <div class="container">
            <div class="row">
                <div class="col-2 col-sm-1 order-3">
                    <button id="btnEmailVerificationClose" type="button" class="btn close" data-uri="<?php echo routePath('dismiss-email-verification');?>
"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="col-10 col-sm-7 col-md-8 order-1">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'verifyEmailAddress'),$_smarty_tpl ) );?>
</span>
                </div>
                <div class="col-12 col-sm-4 col-md-3 order-sm-2 order-md-last">
                    <button id="btnResendVerificationEmail" class="btn btn-default btn-sm btn-block btn-resend-verify-email btn-action" data-email-sent="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailSent'),$_smarty_tpl ) );?>
" data-error-msg="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'error'),$_smarty_tpl ) );?>
" data-uri="<?php echo routePath('user-email-verification-resend');?>
">
                        <span class="loader w-hidden"><i class="fa fa-spinner fa-spin"></i></span>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'resendEmail'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
