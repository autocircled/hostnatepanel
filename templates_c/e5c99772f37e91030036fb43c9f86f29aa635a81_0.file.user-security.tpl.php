<?php
/* Smarty version 3.1.36, created on 2023-11-01 01:56:01
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/user-security.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6541f68121c431_58305500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c99772f37e91030036fb43c9f86f29aa635a81' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/user-security.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6541f68121c431_58305500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userManagement.settings'),$_smarty_tpl ) );?>
</p>

<?php if ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleLinkedAccounts'),$_smarty_tpl ) );?>
</h3>

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"clientsecurity"), 0, true);
?>

            <br />

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"linktable"), 0, true);
?>

            <br />
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['securityQuestions']->value->count() > 0) {?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareanavsecurityquestions'),$_smarty_tpl ) );?>
</h3>

            <form method="post" action="<?php echo routePath('user-security-question');?>
">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->hasSecurityQuestion()) {?>
                    <div class="form-group">
                        <label for="inputCurrentAns" class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['user']->value->getSecurityQuestion();?>
</label>
                        <input type="password" name="currentsecurityqans" id="inputCurrentAns" class="form-control" autocomplete="off" />
                    </div>
                <?php }?>

                <div class="form-group">
                    <label for="inputSecurityQid" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasecurityquestion'),$_smarty_tpl ) );?>
</label>
                    <select name="securityqid" id="inputSecurityQid" class="form-control custom-select">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['securityQuestions']->value, 'question');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['question']->value->question;?>

                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputSecurityAns1" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasecurityanswer'),$_smarty_tpl ) );?>
</label>
                            <input type="password" name="securityqans" id="inputSecurityAns1" class="form-control" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputSecurityAns2" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasecurityconfanswer'),$_smarty_tpl ) );?>
</label>
                            <input type="password" name="securityqans2" id="inputSecurityAns2" class="form-control" autocomplete="off" />
                        </div>
                    </div>
                </div>

                <p>
                    <input class="btn btn-primary" type="submit" name="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>
" />
                    <input class="btn btn-default" type="reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
" />
                </p>
            </form>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['twoFactorAuthAvailable']->value) {?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofactorauth'),$_smarty_tpl ) );?>
</h3>

            <p class="twofa-config-link disable<?php if (!$_smarty_tpl->tpl_vars['twoFactorAuthEnabled']->value) {?> w-hidden<?php }?>">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofacurrently'),$_smarty_tpl ) );?>
 <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>strtolower('enabled')),$_smarty_tpl ) );?>
</strong>
            </p>
            <p class="twofa-config-link enable<?php if ($_smarty_tpl->tpl_vars['twoFactorAuthEnabled']->value) {?> w-hidden<?php }?>">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofacurrently'),$_smarty_tpl ) );?>
 <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>strtolower('disabled')),$_smarty_tpl ) );?>
</strong>
            </p>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaSecurityTwoFactorAuthRecommendation"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>$_prefixVariable1), 0, true);
?>

            <a href="<?php echo routePath('account-security-two-factor-disable');?>
" class="btn btn-danger open-modal twofa-config-link disable<?php if (!$_smarty_tpl->tpl_vars['twoFactorAuthEnabled']->value) {?> w-hidden<?php }?>" data-modal-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofadisable'),$_smarty_tpl ) );?>
" data-modal-class="twofa-setup" data-btn-submit-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofadisable'),$_smarty_tpl ) );?>
" data-btn-submit-color="danger" data-btn-submit-id="btnDisable2FA">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofadisableclickhere'),$_smarty_tpl ) );?>

            </a>
            <a href="<?php echo routePath('account-security-two-factor-enable');?>
" class="btn btn-success open-modal twofa-config-link enable<?php if ($_smarty_tpl->tpl_vars['twoFactorAuthEnabled']->value) {?> w-hidden<?php }?>" data-modal-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofaenable'),$_smarty_tpl ) );?>
" data-modal-class="twofa-setup" data-btn-submit-id="btnEnable2FA">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twofaenableclickhere'),$_smarty_tpl ) );?>

            </a>
        </div>
    </div>
<?php }
}
}
