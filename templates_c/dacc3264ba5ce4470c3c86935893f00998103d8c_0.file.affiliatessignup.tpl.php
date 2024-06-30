<?php
/* Smarty version 3.1.36, created on 2023-11-20 11:22:06
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/affiliatessignup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_655b95be8df838_07163143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacc3264ba5ce4470c3c86935893f00998103d8c' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/affiliatessignup.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655b95be8df838_07163143 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['affiliatesystemenabled']->value) {?>

    <div class="card">
        <div class="card-body extra-padding">

            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesignuptitle'),$_smarty_tpl ) );?>
</h3>
            <p class="lead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesignupintro'),$_smarty_tpl ) );?>
</p>

            <ul class="py-4">
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesignupinfo1'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesignupinfo2'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesignupinfo3'),$_smarty_tpl ) );?>
</li>
            </ul>

            <br />

            <form method="post" action="affiliates.php">
                <input type="hidden" name="activate" value="true" />
                <p class="text-center">
                    <button id="activateAffiliate" type="submit" class="btn btn-success btn-lg px-5 py-2">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesactivate'),$_smarty_tpl ) );?>

                    </button>
                </p>
            </form>
        </div>
    </div>

<?php } else { ?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'affiliatesdisabled'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
}
}
}
