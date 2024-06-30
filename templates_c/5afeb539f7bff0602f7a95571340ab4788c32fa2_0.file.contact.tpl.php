<?php
/* Smarty version 3.1.36, created on 2023-10-06 16:30:43
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65207c83a77f08_67450050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5afeb539f7bff0602f7a95571340ab4788c32fa2' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/contact.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65207c83a77f08_67450050 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-4">
    <div class="card-body extra-padding">

        <div class="mb-4">
            <h6 class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactus'),$_smarty_tpl ) );?>
</h6>
            <p class="text-muted mb-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'readyforquestions'),$_smarty_tpl ) );?>
</p>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactsent'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['sent']->value) {?>
            <form method="post" action="contact.php" role="form">
            <input type="hidden" name="action" value="send" />

                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label text-right font-"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsclientname'),$_smarty_tpl ) );?>
</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="inputName" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-3 col-form-label text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsclientemail'),$_smarty_tpl ) );?>
</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" id="inputEmail" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSubject" class="col-sm-3 col-form-label text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketsubject'),$_smarty_tpl ) );?>
</label>
                    <div class="col-sm-7">
                        <input type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" id="inputSubject" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMessage" class="col-sm-3 col-form-label text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactmessage'),$_smarty_tpl ) );?>
</label>
                    <div class="col-sm-9">
                        <textarea name="message" rows="7" class="form-control" id="inputMessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
                    <div class="text-center margin-bottom">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php }?>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactsend'),$_smarty_tpl ) );?>
</button>
                </div>
            </form>

        <?php }?>

    </div>
</div>
<?php }
}
