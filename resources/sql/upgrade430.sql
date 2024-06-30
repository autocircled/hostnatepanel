ALTER TABLE `tbladdons` ADD `weight` INT( 2 ) NOT NULL DEFAULT '0';

INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('CreateInvoiceDaysBeforeMonthly', '');
INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('CreateInvoiceDaysBeforeQuarterly', '');
INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('CreateInvoiceDaysBeforeSemiAnnually', '');
INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('CreateInvoiceDaysBeforeAnnually', '');
INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('CreateInvoiceDaysBeforeBiennially', '');
INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('CreateInvoiceDaysBeforeTriennially', '');

INSERT INTO `tblconfiguration` (`setting`, `value`) VALUES ('ClientsProfileUneditableFields', '');

ALTER TABLE `tblhosting` ADD `suspendreason` TEXT NOT NULL AFTER `promoid` ;
UPDATE `tblemailtemplates` SET `name` = 'Service Suspension Notification',`subject` = 'Service Suspension Notification',`message` = '<p>Dear {$client_name},</p><p>This is a notification that your service has now been suspended.  The details of this suspension are below:</p><p>Product/Service: {$service_product_name}<br />{if $service_domain}Domain: {$service_domain}<br />{/if}Amount: {$service_recurring_amount}<br />Due Date: {$service_next_due_date}<br />Suspension Reason: <strong>{$service_suspension_reason}</strong></p><p>Please contact us as soon as possible to get your service reactivated.</p><p>{$signature}</p>' WHERE `name` = 'Account Suspended';

ALTER TABLE `tblpromotions` ADD `recurfor` INT( 3 ) NOT NULL ;

INSERT INTO `tblemailtemplates` (`id`, `type`, `name`, `subject`, `message`, `fromname`, `fromemail`, `disabled`, `custom`, `language`, `copyto`, `plaintext`) VALUES (NULL, 'admin', 'Automatic Setup Failed', 'WHMCS Automatic Setup Failed', '<p>An order has received its first payment but the automatic provisioning has failed and requires you to manually check & resolve.</p>\r\n<p>Client ID: {$client_id}<br />{if $service_id}Service ID: {$service_id}<br />Product/Service: {$service_product}<br />Domain: {$service_domain}{else}Domain ID: {$domain_id}<br />Registration Type: {$domain_type}<br />Domain: {$domain_name}{/if}<br />Error: {$error_msg}</p>\r\n<p>{$whmcs_admin_link}</p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Automatic Setup Successful', 'WHMCS Automatic Setup Successful', '<p>An order has received its first payment and the product/service has been automatically provisioned successfully.</p>\r\n<p>Client ID: {$client_id}<br />{if $service_id}Service ID: {$service_id}<br />Product/Service: {$service_product}<br />Domain: {$service_domain}{else}Domain ID: {$domain_id}<br />Registration Type: {$domain_type}<br />Domain: {$domain_name}{/if}</p>\r\n<p>{$whmcs_admin_link}</p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Domain Renewal Failed', 'WHMCS Automatic Domain Renewal Failed', '<p>An invoice for the renewal of a domain has been paid but the renewal request submitted to the registrar failed.</p>\r\n<p>Client ID: {$client_id}<br />Domain ID: {$domain_id}<br />Domain Name: {$domain_name}<br />Error: {$error_msg}</p>\r\n<p>{$whmcs_admin_link}</p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Domain Renewal Successful', 'WHMCS Automatic Domain Renewal Successful', '<p>An invoice for the renewal of a domain has been paid and the renewal request was submitted to the registrar successfully.</p>\r\n<p>Client ID: {$client_id}<br />Domain ID: {$domain_id}<br />Domain Name: {$domain_name}</p>\r\n<p>{$whmcs_admin_link}</p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'New Order Notification', 'WHMCS New Order Notification', '<p><strong>Order Information</strong></p>\r\n<p>Order ID: {$order_id}<br />\r\nOrder Number: {$order_number}<br />\r\nDate/Time: {$order_date}<br />\r\nInvoice Number: {$invoice_id}<br />\r\nPayment Method: {$order_payment_method}</p>\r\n<p><strong>Customer Information</strong></p>\r\n<p>Customer ID: {$client_id}<br />\r\nName: {$client_first_name} {$client_last_name}<br />\r\nEmail: {$client_email}<br />\r\nCompany: {$client_company_name}<br />\r\nAddress 1: {$client_address1}<br />\r\nAddress 2: {$client_address2}<br />\r\nCity: {$client_city}<br />\r\nState: {$client_state}<br />\r\nPostcode: {$client_postcode}<br />\r\nCountry: {$client_country}<br />\r\nPhone Number: {$client_phonenumber}</p>\r\n<p><strong>Order Items</strong></p>\r\n<p>{$order_items}</p>\r\n{if $order_notes}<p><strong>Order Notes</strong></p>\r\n<p>{$order_notes}</p>{/if}\r\n<p><strong>ISP Information</strong></p>\r\n<p>IP: {$client_ip}<br />\r\nHost: {$client_hostname}</p><p><a href="{$whmcs_admin_url}orders.php?action=view&id={$order_id}">{$whmcs_admin_url}orders.php?action=view&id={$order_id}</a></p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Service Unsuspension Failed', 'WHMCS Service Unsuspension Failed', '<p>This product/service has received its next payment but the automatic reactivation has failed.</p>\r\n<p>Client ID: {$client_id}<br />Service ID: {$service_id}<br />Product/Service: {$service_product}<br />Domain: {$service_domain}<br />Error: {$error_msg}</p>\r\n<p>{$whmcs_admin_link}</p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Service Unsuspension Successful', 'WHMCS Service Unsuspension Successful', '<p>This product/service has received its next payment and has been reactivated successfully.</p>\r\n<p>Client ID: {$client_id}<br />Service ID: {$service_id}<br />Product/Service: {$service_product}<br />Domain: {$service_domain}</p>\r\n<p>{$whmcs_admin_link}</p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Support Ticket Created', '[Ticket ID: {$ticket_tid}] New Support Ticket Opened', '<p>A new support ticket has been opened.</p>\r\n<p>Client: {$client_name}{if $client_id} #{$client_id}{/if}<br />Department: {$ticket_department}<br />Subject: {$ticket_subject}<br />Priority: {$ticket_priority}</p>\r\n<p>---<br />{$ticket_message}<br />---</p>\r\n<p>You can respond to this ticket by simply replying to this email or through the admin area at the url below.</p>\r\n<p><a href="{$whmcs_admin_url}supporttickets.php?action=viewticket&id={$ticket_id}">{$whmcs_admin_url}supporttickets.php?action=viewticket&id={$ticket_id}</a></p>', '', '', '', '', '', '', 0),(NULL, 'admin', 'Support Ticket Response', '[Ticket ID: {$ticket_tid}] New Support Ticket Response', '<p>A new support ticket response has been made.</p>\r\n<p>Client: {$client_name}{if $client_id} #{$client_id}{/if} <br />Department: {$ticket_department} <br />Subject: {$ticket_subject} <br />Priority: {$ticket_priority}</p>\r\n<p>--- <br />{$ticket_message} <br />---</p>\r\n<p>You can respond to this ticket by simply replying to this email or through the admin area at the url below.</p>\r\n<p><a href="{$whmcs_admin_url}supporttickets.php?action=viewticket&id={$ticket_id}">{$whmcs_admin_url}supporttickets.php?action=viewticket&id={$ticket_id}</a></p>', '', '', '', '', '', '', 0);

UPDATE `tblconfiguration` SET value='ssl' where setting = 'SMTPSSL' and value='on';
