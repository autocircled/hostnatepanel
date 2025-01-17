<?php
/* Smarty version 3.1.36, created on 2024-02-08 02:59:46
  from 'mailMessage:message' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65c4980291a6c4_72175725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652e3de8ff57f412acf7c0a8dadc70dc1a7637b6' => 
    array (
      0 => 'mailMessage:message',
      1 => 1707382786,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c4980291a6c4_72175725 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>WHMCS Automatic Setup Successful</title>
        <style type="text/css">
            [EmailCSS]
        </style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                                <img src="https://hostnate.com/assets/img/hostnate_logo.png" style="max-width:600px;padding:20px 20px 0 20px" id="headerImage" alt="Hostnate Private Limited" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
                                                <p>An order has received its first payment and the product/service has been automatically provisioned successfully.</p>
<p>Client ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
<br /><?php if ($_smarty_tpl->tpl_vars['service_id']->value) {?>Service ID: <?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
<br />Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product']->value;?>
<br />Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;
} else { ?>Domain ID: <?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>
<br />Registration Type: <?php echo $_smarty_tpl->tpl_vars['domain_type']->value;?>
<br />Domain: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;
}?></p>
<p><?php echo $_smarty_tpl->tpl_vars['whmcs_admin_link']->value;?>
</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                <a href="https://www.whmcs.com/"><img src="https://cdn.whmcs.com/images/whmcs_email_footer.png" id="footerImage" alt="WHMCS" /></a>
                                                This notification was automatically generated by WHMCS<br />
                                                &nbsp;<a href="https://hostnate.com/">https://hostnate.com/</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="https://panel.hostnate.com/admin/">log in to the admin area</a>&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html><?php }
}
