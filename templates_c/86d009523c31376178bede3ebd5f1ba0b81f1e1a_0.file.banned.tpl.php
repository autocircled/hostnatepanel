<?php
/* Smarty version 3.1.36, created on 2023-10-12 04:05:01
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6527b6bd30c7d9_01020219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86d009523c31376178bede3ebd5f1ba0b81f1e1a' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/banned.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6527b6bd30c7d9_01020219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-danger">
    <strong>
        <i class="fas fa-gavel"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedyourip'),$_smarty_tpl ) );?>

        <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedhasbeenbanned'),$_smarty_tpl ) );?>

    </strong>
    <ul>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedbanreason'),$_smarty_tpl ) );?>
:
            <strong><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</strong>
        </li>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedbanexpires'),$_smarty_tpl ) );?>
:
            <?php echo $_smarty_tpl->tpl_vars['expires']->value;?>

        </li>
    </ul>
</div>
<?php }
}
