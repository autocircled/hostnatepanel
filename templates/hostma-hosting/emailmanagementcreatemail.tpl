<div class="card">
	<div class="card-body">
		{literal}
			<script language="javascript" type="text/javascript">function showlangtable(){jQuery("#tblfrm").slideToggle();}</script>
		{/literal}
		
		{include file="$template/includes/alert.tpl" type="info" msg=$LANG.rcmail_createemaildesc}

		{if $bulkmailcreateaccountsuccess}
		<br />
		<div class="alert alert-success">
			<p>{$LANG.moduleactionsuccess}</p>
			<ul>
				{$bulkmailcreateaccountsuccess}
			</ul>
		</div>
		{/if}		

		{if $bulkerrormessage}
		<br />
		<div class="alert alert-danger">
			<p>{$LANG.clientareaerrors}</p>
			<ul>
				{$bulkerrormessage}
			</ul>
		</div>
		{/if}

		{if $mailcreateaccountsuccess}
		<br />
		<div class="alert alert-success">
			<p>{$LANG.moduleactionsuccess}</p>
			<ul>
				{$mailcreateaccountsuccess}
			</ul>
		</div>
		
		<br/>
		<table class="table table-bordered table-hover">
			<tr>
				<td style="vertical-align:top">
					{$LANG.rcmail_emailaccounttitle}
				</td>
				<td style="vertical-align:top">
					{$your_newemail}
				</td>
			</tr>
			<tr>
				<td>
					<strong>{$LANG.clientareapassword}</strong>
				</td>
				<td>
					<strong>{$your_password}</strong>
				</td>
			</tr>
			<tr>
				<td>
					<strong>{$LANG.rcmail_popservertitle}</strong>
				</td>
				<td>
					{$popserver}
				</td>
			</tr>
			<tr>
				<td>
					<strong>{$LANG.rcmail_imapservertitle}</strong>
				</td>
				<td>
					{$imapserver}
				</td>
			</tr>
			<tr>
				<td>
					<strong>{$LANG.rcmail_smtpservertitle}</strong>
				</td>
				<td>
					{$smtpserver}
				</td>
			</tr>
			<tr>
				<td>
					<strong>{$LANG.rcmail_clientareawebmaillink}</strong>
				</td>
				<td>
					<a href="{$webmailurl}" target="_blank">{$webmailurl}</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<form method="post" action="emailmanagement.php?action=modifyaccount">
						<input type="hidden" name="page" value="{$smarty.post.page}"/>
						<input type="hidden" name="domainid" value="{$domainid}"/>
						<input type="hidden" name="domain" value="{$domain}"/>
						<input name="freemailhosting" value="{$freemailhosting}" type="hidden"/>
						<input type="hidden" name="emailaddress" value="{$your_newemail}"/>
						<input type="hidden" name="mailtype" value="mailaccount"/>
						<p align="center"><input type="submit" value="{$LANG.rcmail_modifyemail}" class="btn btn-primary"/></p>
					</form>
				</td>
			</tr>
		</table>
		{/if}
		
		{if $mailcreateaccounterror}
		<br />
		<div class="alert alert-danger">
			<p>{$LANG.clientareaerrors}</p>
			<ul>
				{$mailcreateaccounterror}
			</ul>
		</div>
		{/if}
		
		<br />
		<form method="post" action="emailmanagement.php?action=createaccount">
			<input type="hidden" name="page" value="{$smarty.post.page}"/>
			<input type="hidden" name="domainid" value="{$domainid}"/>
			<input type="hidden" name="domain" value="{$domain}"/>
			<input name="freemailhosting" value="{$freemailhosting}" type="hidden"/>
			<input type="hidden" name="createaccount" value="true"/>
			<table class="table table-bordered table-hover">
				<tr>
					<td style="vertical-align:top">
						<strong>{$LANG.clientareafirstname}</strong>
					</td>
					<td style="vertical-align:top">
						<input class="form-control" name="firstname" type="text" value="{if $mailcreateaccounterror}{$smarty.post.firstname}{/if}" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<strong>{$LANG.clientarealastname}</strong>
					</td>
					<td>
						<input class="form-control" name="lastname" type="text" value="{if $mailcreateaccounterror}{$smarty.post.lastname}{/if}" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<strong>{$LANG.clientareaemail}</strong>
					</td>
					<td>
						<div class="input-group">
							<input class="form-control" name="email" type="text" value="{if $mailcreateaccounterror}{$smarty.post.email}{/if}" size="20"/>
							<div class="input-group-append">
							<span class="input-group-text" id="basic-addon2">@{$domain}</span>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<strong>{$LANG.rcmail_bulkcolpasswd}</strong>
					</td>
					<td>
						<input class="form-control" name="password" type="text" value="{if $mailcreateaccounterror}{$smarty.post.password}{/if}" size="20"/><br />
						{$LANG.rcmail_passwordtitledesc}
					</td>
				</tr>
				<tr>
					<td>
						<strong>{$LANG.rcmail_alternatemailaddress}</strong>
					</td>
					<td>
						<input class="form-control" name="notifymail" type="text" value="{if $mailcreateaccounterror}{$smarty.post.notifymail}{/if}" size="40"/><br/><strong>{$LANG.rcmail_importantnotetitle}</strong>: {$LANG.rcmail_importantnotedesc}
					</td>
				</tr>
				<tr>
					<td>
						<strong>{$LANG.rcmail_languagetitle}</strong>
					</td>
					<td>
						<select class="form-control" name="language-code">
						<option value="en">{$LANG.rcmail_langenglish}</option>
						<option value="es">{$LANG.rcmail_langspanish}</option>
						<option value="es-MX">{$LANG.rcmail_langspanishla}</option>
						<option value="pt-PT">{$LANG.rcmail_langportuguese}</option>
						<option value="de">{$LANG.rcmail_langgerman}</option>
						<option value="tr">{$LANG.rcmail_langturkish}</option>
						<option value="ru">{$LANG.rcmail_langrussian}</option>	
						<option value="zh-CN">{$LANG.rcmail_langchinese}</option>	
						</select>
					</td>
				</tr>
				<tr>
				<td>
					<strong>{$LANG.clientareacountry}</strong>
				</td>
				<td>
					{$dropdowncountries}
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p align="center"><input type="submit" value="{$LANG.rcmail_createemail}" class="btn btn-success"/></p>
				</td>
			</tr>
		</table>
		</form>
		
		<br />
		{if $freemailhosting neq "true"}
		<a name="bulk"></a>
		<div class="page-header">
			<h2>{$LANG.rcmail_bulkuseraddtitle}</h2>
		</div>
		
		<ol>
			<li>
				<p>{$LANG.rcmail_bulkdesc1}:</p><br />
				<p>{$LANG.rcmail_bulkdesc2}</p>
				<br />
		
				<div id="tblfrm" style="display:none;">
					<table class="table table-bordered table-hover">
						<tr>
							<td>{$LANG.rcmail_languagenametitle}</td>
							<td>{$LANG.rcmail_languagecodetitle}</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langchinese}</td>
							<td>zh-CN</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langenglish}</td>
							<td>en</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langgerman}</td>
							<td>de</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langportuguese}</td>
							<td>pt-PT</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langrussian}</td>
							<td>ru</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langspanishla}</td>
							<td>es-MX</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langspanish}</td>
							<td>es</td>
						</tr>
						<tr>
							<td>{$LANG.rcmail_langturkish}</td>
							<td>tr</td>
						</tr>
					</table>
				</div>
				
				<p>{$LANG.rcmail_bulkdesc3}:</p><br />
				<p><strong>{$LANG.rcmail_bulkexptitle1}</strong>: {$LANG.rcmail_bulkexpdesc1}<br />
				<strong>{$LANG.rcmail_bulkexptitle2}</strong>: {$LANG.rcmail_bulkexpdesc2}</p>
				<div style="vertical-align:middle;padding-top:10px;"> <img style="padding-right:10px;" src="templates/{$template}/img/csv.gif" border="0" /><a href="templates/{$template}/downloadexample.csv">{$LANG.rcmail_bulkexpddownload}</a></div>
			</li>
			<br />
			<li>
				<strong>{$LANG.rcmail_bulkcsvupload}</strong>
				<form method="post" enctype="multipart/form-data" action="emailmanagement.php?action=createaccount#bulk">
				<input type="hidden" name="bulkcreate" value="true" />
				<input type="hidden" name="page" value="{$smarty.post.page}"/>
				<input type="hidden" name="domainid" value="{$domainid}"/>
				<input type="hidden" name="domain" value="{$domain}"/>
				<input name="freemailhosting" value="{$freemailhosting}" type="hidden"/>
				<input type="file" name="csv" value="" class="form-control" /><br />
				<input type="submit" name="submit" value="{$LANG.rcmail_bulkcsvuploadbutton}" class="btn btn-success" />
				</form>
			</li>
		</ol>
		
		{if $bulkmailcreateaccountsuccess}
		<br />
		
		<form method="post" action="emailmanagement.php?action=createaccount">
			<input type="hidden" name="download" value="true"/>
			<input type="hidden" name="page" value="{$smarty.post.page}"/>
			<input type="hidden" name="domainid" value="{$domainid}"/>
			<input type="hidden" name="domain" value="{$domain}"/>
			<input name="freemailhosting" value="{$freemailhosting}" type="hidden"/>
			<p><input type="submit" value="{$LANG.rcmail_bulkdownloadbutton}" class="btn btn-success" /></p>
			
			<table class="table table-sm table-bordered table-hover">
				<tr>
					<td>{$LANG.rcmail_bulkcolresult}</td>
					<td>{$LANG.rcmail_bulkcolemail}</td>
					<td>{$LANG.rcmail_bulkcolfirstname}</td>
					<td>{$LANG.rcmail_bulkcollastname}</td>
					<td>{$LANG.rcmail_bulkcolpasswd}</td>
					<td>{$LANG.rcmail_bulkcolcountry}</td>
					<td>{$LANG.rcmail_bulkcollang}</td>
					<td>{$LANG.rcmail_bulkcolaltmail}</td>
				</tr>
				{foreach key=num item=service from=$csvresultdata}
				<tr>
				<td>
					<img src="templates/{$template}/img/{if $service.key8 eq "ok"}ok.png{else}ko.png{/if}" alt="{$service.key8}" border="0">
					<input type="hidden" name="result[]" value="{$service.key8},{$service.key1},{$service.key2},{$service.key3},{$service.key4},{$service.key5},{$service.key6},{$service.key7}"/>
				</td>
				<td><span class="d-inline-block text-truncate" style="max-width: 120px;" data-toggle="tooltip" data-placement="top" title="{$service.key1}">{$service.key1}</span></td>
				<td>{$service.key2}</td>
				<td>{$service.key3}</td>
				<td>{$service.key4}</td>
				<td>{$service.key5}</td>
				<td>{$service.key6}</td>
				<td><span class="d-inline-block text-truncate" style="max-width: 120px;" data-toggle="tooltip" data-placement="top" title="{$service.key1}">{$service.key7}</span></td>
				</tr>
				{/foreach}
			</table>
		</form>
		{/if}
		{/if}
	</div>
</div>