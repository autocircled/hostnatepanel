<?php
/* Smarty version 3.1.36, created on 2023-10-06 18:27:07
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/viewannouncement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_652097cb769778_41240545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a28f69bfd3da847b393e9f905fe0f94fe7ac908' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/viewannouncement.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652097cb769778_41240545 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body extra-padding">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['twittertweet']->value) {?>
                <div class="float-right">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-size="large" data-via="<?php echo $_smarty_tpl->tpl_vars['twitterusername']->value;?>
">
                        Tweet
                    </a>
                    <?php echo '<script'; ?>
 src="https://platform.twitter.com/widgets.js"><?php echo '</script'; ?>
>
                </div>
            <?php }?>
        </h1>

        <ul class="list-inline">
            <li class="list-inline-item text-muted pr-3">
                <i class="far fa-calendar-alt fa-fw"></i>
                <?php echo $_smarty_tpl->tpl_vars['carbon']->value->createFromTimestamp($_smarty_tpl->tpl_vars['timestamp']->value)->format('l, jS F, Y');?>

            </li>
            <li class="list-inline-item text-muted pr-3">
                <i class="far fa-clock fa-fw"></i>
                <?php echo $_smarty_tpl->tpl_vars['carbon']->value->createFromTimestamp($_smarty_tpl->tpl_vars['timestamp']->value)->format('H:ia');?>

            </li>
        </ul>

        <div class="py-5">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['facebookrecommend']->value) {?>
            <div id="fb-root"></div>
            <?php echo '<script'; ?>
>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            <?php echo '</script'; ?>
>
            <div class="fb-like" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['urlfriendlytitle']->value);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend">
            </div>
        <?php }?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['facebookcomments']->value) {?>
    <div class="card">
        <div class="card-body p-5">
            <div id="fb-root">
            </div>
            <?php echo '<script'; ?>
>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            <?php echo '</script'; ?>
>
            <fb:comments href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['urlfriendlytitle']->value);?>
" num_posts="5" width="100%"></fb:comments>
        </div>
    </div>
<?php }?>

<a href="<?php echo routePath('announcement-index');?>
" class="btn btn-default px-4">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareabacklink'),$_smarty_tpl ) );?>

</a>

<?php if ($_smarty_tpl->tpl_vars['editLink']->value) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['editLink']->value;?>
" class="btn btn-default px-4 float-right">
        <i class="fas fa-pencil-alt fa-fw"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'edit'),$_smarty_tpl ) );?>

    </a>
<?php }
}
}
