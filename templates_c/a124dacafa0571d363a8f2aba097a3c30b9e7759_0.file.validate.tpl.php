<?php
/* Smarty version 3.1.36, created on 2024-01-05 12:48:50
  from '/var/www/panel.hostnate.com/templates/hostma-hosting/payment/card/validate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_65984f127ae1d2_20832835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a124dacafa0571d363a8f2aba097a3c30b9e7759' => 
    array (
      0 => '/var/www/panel.hostnate.com/templates/hostma-hosting/payment/card/validate.tpl',
      1 => 1696537052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65984f127ae1d2_20832835 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['hasRemoteInput']->value) {?>
    <?php echo '<script'; ?>
>
        var stateNotRequired = true,
            ccForm = '';

        function validateCreditCardInput(e) {
            var newOrExisting = jQuery('input[name="ccinfo"]:checked').val(),
                submitButton = jQuery('#btnSubmit'),
                cardType = null,
                submit = true,
                cardNumber = jQuery('#inputCardNumber');

            ccForm.find('.form-group').removeClass('has-error');
            ccForm.find('.field-error-msg').hide();

            if (newOrExisting === 'new') {
                cardType = jQuery.payment.cardType(ccForm.find('#inputCardNumber').val());
                if (
                    !jQuery.payment.validateCardNumber(ccForm.find('#inputCardNumber').val())
                    || cardNumber.hasClass('unsupported')
                ) {
                    var error = cardNumber.data('message-invalid');
                    if (cardNumber.hasClass('unsupported')) {
                        error = cardNumber.data('message-unsupported');
                    }
                    ccForm.find('#inputCardNumber').setInputError(error).showInputError();
                    submit = false;
                }
                if (
                    !jQuery.payment.validateCardExpiry(
                        ccForm.find('#inputCardExpiry').payment('cardExpiryVal')
                    )
                ) {
                    ccForm.find('#inputCardExpiry').showInputError();
                    submit = false;
                }
            }
            if (!jQuery.payment.validateCardCVC(ccForm.find('#inputCardCvv').val(), cardType)) {
                ccForm.find('#inputCardCvv').showInputError();
                submit = false;
            }
            if (!submit) {
                submitButton.prop('disabled', false)
                    .removeClass('disabled')
                    .find('span').toggle();
                e.preventDefault();
            }
        }

        jQuery(document).ready(function() {
            ccForm = jQuery('#frmPayment');
            ccForm.on('submit', validateCreditCardInput);
            jQuery('.paymethod-info input[name="ccinfo"]').on('ifChecked', function() {
                if (jQuery(this).val() === 'new') {
                    showNewCardInputFields();
                } else {
                    hideNewCardInputFields();
                }
            });

            jQuery('#billingAddressChoice input[name="billingcontact"]').on('ifChecked', function() {
                if (jQuery(this).val() === 'new') {
                    showNewBillingAddressFields();
                } else {
                    hideNewBillingAddressFields();
                }
            });

            ccForm.find('#inputCardNumber').payment('formatCardNumber');
            ccForm.find('#inputCardStart').payment('formatCardExpiry');
            ccForm.find('#inputCardExpiry').payment('formatCardExpiry');
            ccForm.find('#inputCardCvv').payment('formatCardCVC');
            ccForm.find('#ccissuenum').payment('restrictNumeric');
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.payment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            jQuery('.paymethod-info input[name="ccinfo"]').on('ifChecked', function() {
                if (jQuery(this).val() === 'new') {
                    var route = '<?php echo $_smarty_tpl->tpl_vars['newCardRoute']->value;?>
',
                        delimiter = '?';
                    if (route.indexOf('?') !== -1) {
                        delimiter = '&';
                    }
                    window.location = route + delimiter + 'ccinfo=new';
                    return true;
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
