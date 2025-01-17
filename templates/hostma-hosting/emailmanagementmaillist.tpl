<script language="javascript" type="text/javascript">
	function confirmMemberDelete(){literal}{{/literal}return confirm("{$LANG.rcmail_memberdeletewarning}");{literal}}{/literal}
	function confirmModeratorDelete(){literal}{{/literal}return confirm("{$LANG.rcmail_moderatordeletewarning}");{literal}}{/literal}
</script>

{if $addsubscribersuccess}
<br />
<div class="alert alert-success">
    <p>{$LANG.moduleactionsuccess}</p>
    <ul>
        {$addsubscribersuccess}
    </ul>
</div>
{/if}

{if $addsubscribererror}
<br />
<div class="alert alert-danger">
	<p>{$LANG.clientareaerrors}</p>
    <ul>
        {$addsubscribererror}
    </ul>
</div>
{/if}

{if $delsubscribersuccess}
<br />
<div class="alert alert-success">
    <p>{$LANG.moduleactionsuccess}</p>
    <ul>
        {$delsubscribersuccess}
    </ul>
</div>
{/if}

{if $delsubscribererror}
<br />
<div class="alert alert-danger">
    <p>{$LANG.moduleactionsuccess}</p>
    <ul>
        {$delsubscribererror}
    </ul>
</div>
{/if}

{if $addmoderatorsuccess}
<br />
<div class="alert alert-success">
    <p>{$LANG.moduleactionsuccess}</p>
    <ul>
        {$addmoderatorsuccess}
    </ul>
</div>
{/if}

{if $addmoderatorerror}
<br />
<div class="alert alert-danger">
	<p>{$LANG.clientareaerrors}</p>
    <ul>
        {$addmoderatorerror}
    </ul>
</div>
{/if}

{if $delmoderatorsuccess}
<br />
<div class="alert alert-success">
    <p>{$LANG.moduleactionsuccess}</p>
    <ul>
        {$delmoderatorsuccess}
    </ul>
</div>
{/if}

<script language="javascript" type="text/javascript">
	{literal}
		jQuery(document).ready(function() {
			jQuery("#select-all-email").click(function() {
				var checkBoxes = jQuery("input[name=multiaction\\[\\]]");
				checkBoxes.prop("checked", !checkBoxes.prop("checked"));
			});                 
		});	
	{/literal}
</script>
<div class="tab-content margin-bottom">
	<div class="tab-pane fade show active" id="tabAddmem">
        <div class="card">
            <div class="card-body">
				<form method="post" action="emailmanagement.php?action=managelist#tabAddmem">
					<input type="hidden" name="domainid" value="{$domainid}"/>
					<input type="hidden" name="domain" value="{$domain}"/>
					<input type="hidden" name="addsubscriber" value="true"/>
					<input type="hidden" name="listaddress" value="{$listaddress}"/>
					<input type="hidden" name="istab" value="tabaddmembers"/>
					<table class="table table-bordered table-hover">
						<tr>
							<td colspan="2">
								<h3>{$LANG.rcmail_addmembers} {$listaddress}</h3>
							</td>
						</tr>
						<tr>
							<td>
								<strong>Emails</strong>
							</td>
							 <td>
								{$LANG.rcmail_membersdesc} <br />
								<textarea class="form-control" name="subscribers" cols="50" rows="5">{if $addsubscribererror}{$smarty.post.subscribers}{/if}</textarea>
							</td>
						</tr>
						<tr>
							<td>
								<strong>{$LANG.rcmail_note}</strong>
							</td>
							<td>
								{$LANG.rcmail_maxmembersaddatonce}<br />
								{$LANG.rcmail_maxmembersdesc}
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<p align="center"><input type="submit" value="{$LANG.rcmail_addmemberbutton}" class="btn btn-success"/></p>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	
	<div class="tab-pane fade" id="tabDelmem">
        <div class="card">
            <div class="card-body">
				<div class="input-group mb-3">
					<form method="post" action="emailmanagement.php?action=managelist#tabDelmem">
						<input type="hidden" name="domainid" value="{$domainid}"/>
						<input type="hidden" name="domain" value="{$domain}"/>
						<input type="hidden" name="listaddress" value="{$listaddress}"/>
						<input type="hidden" name="istab" value="tabremmembers"/>
						<div class="input-group-append">
							<input type="text" name="q" value="{if $q}{$q}{else}{$LANG.rcmail_searchentercriteria}{/if}" class="form-control appended-form-control" onfocus="if(this.value=='{$LANG.rcmail_searchentercriteria}')this.value=''" />
							<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
				
				<br />
				<p>{$numproducts} {$LANG.recordsfound}, {$LANG.page} {$pagenumber} {$LANG.pageof} {$totalpages}</p>
				<table class="table table-bordered table-hover">
					<tr>
						<td {if $orderby eq "subscriber"} class="headerSort{$sort}"{/if}><a href="emailmanagement.php?action=managelist{if $q}&q={$q}{/if}&listaddress={$listaddress}&orderby=subscriber&domainid={$domainid}&domain={$domain}&sort={if $sort eq "desc"}asc{else}desc{/if}&page={$pagenumber}&itemlimit={$itemlimit}">{$LANG.rcmail_listmembertitle}&nbsp;{$LANG.rcmail_singlewordof} {$listaddress}</a></td>
						<td><a href="#" onclick="return false">{$LANG.rcmail_mailactions}</a></td>
						<td><input id="select-all-email" type="checkbox" /></td>
					</tr>
					{foreach key=num item=service from=$searchdataKey}
					<tr>
						<td>
							{$service.subscriber}
						</td>
						<td>
							<form method="post" action="emailmanagement.php?action=managelist#tabDelmem" onclick="return confirmMemberDelete();">
								<input type="hidden" name="deletesubscriber" value="true"/>
								<input type="hidden" name="subscribers" value="{$service.subscriber}"/>
								<input type="hidden" name="domainid" value="{$domainid}"/>
								<input type="hidden" name="domain" value="{$domain}"/>
								<input type="hidden" name="listaddress" value="{$listaddress}"/>
								<input type="hidden" name="page" value="{$pagenumber}"/>
								<input type="hidden" name="itemlimit" value="{$itemlimit}"/>
								<input type="hidden" name="q" value="{$q}"/>
								<input type="hidden" name="istab" value="tabremmembers"/>
								<input type="submit" value="{$LANG.rcmail_deletebutton}" class="btn btn-danger btn-sm"/>
							</form>
						</td>
						<td><input name="multiaction[]" type="checkbox" value="{$service.subscriber}" class="checkbox"/></td>
					</tr>
					{foreachelse}
					<tr>
						<td colspan="3">
							{$LANG.norecordsfound}			
						</td>
					</tr>
					{/foreach}
					<tr>
						<td colspan="3">
							{if $searchdataKey}
							<div style="float:right;">
								<form id="multiaction" method="post" action="emailmanagement.php?action=managelist#tabDelmem">
									<input type="hidden" name="domain" value="{$domain}"/>
									<input type="hidden" name="domainid" value="{$domainid}"/>
									<input type="hidden" name="listaddress" value="{$listaddress}"/>
									<input type="hidden" name="page" value="{$pagenumber}"/>
									<input type="hidden" name="itemlimit" value="{$itemlimit}"/>
									<input type="hidden" name="q" value="{$q}"/>
									<input type="hidden" name="istab" value="tabremmembers"/>
									<input type="submit" name="membersdelete" value="{$LANG.rcmail_multideletememberbutton}" class="btn btn-danger btn-sm" onclick="return confirmMemberDelete();" />
								</form>
							</div>
							{/if}
							{if $q neq ""}
							<div style="float:left;">
								<form method="post" action="emailmanagement.php?action=managelist#tabDelmem">
									<input type="hidden" name="q" value=""/> 
									<input type="hidden" name="domainid" value="{$domainid}"/>
									<input type="hidden" name="domain" value="{$domain}"/>
									<input type="hidden" name="listaddress" value="{$listaddress}"/>
									<p align="center"><input type="submit" value="{$LANG.rcmail_deletesearchquerybutton}" class="btn btn-sm"/></p>
								</form>
							</div>
							{/if}			
						</td>
					</tr>
				</table>
				<br />
				<div class="col-sm-5">
					<form action="emailmanagement.php#tabDelmem">
						<input type="hidden" name="action" value="managelist" />
						<select class="form-control input-sm" name="itemlimit" id="itemlimit" onchange="this.form.submit();">
							<option>{$LANG.resultsperpage}</option>
							<option value="10"{if $itemlimit==10} selected{/if}>10</option>
							<option value="25"{if $itemlimit==25} selected{/if}>25</option>
							<option value="50"{if $itemlimit==50} selected{/if}>50</option>
							<option value="100"{if $itemlimit==100} selected{/if}>100</option>
							<option value="all"{if $itemlimit > 100} selected{/if}>{$LANG.clientareaunlimited}</option>
						</select>
						<input type="hidden" name="domainid" value="{$domainid}" />
						<input type="hidden" name="domain" value="{$domain}" />
						<input type="hidden" name="listaddress" value="{$listaddress}" />
						<input type="hidden" name="istab" value="tabremmembers"/>
					</form>
					<br />
					<div class="btn-group" role="group" aria-label="pagination">
						<button type="button" class="btn btn-secondary" {if !$prevpage} disabled{/if}><a style="text-decoration:none;color:inherit;" href="{if $prevpage}emailmanagement.php?action=managelist{if $q}&q={$q}{/if}&amp;page={$prevpage}&domainid={$domainid}&domain={$domain}&listaddress={$listaddress}&itemlimit={$itemlimit}&istab=tabremmembers#tabDelmem{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></button>
						<button type="button" class="btn btn-secondary" {if !$nextpage || $nextpage==$pageend} disabled{/if}><a style="text-decoration:none;color:inherit;" href="{if $nextpage != $pageend}emailmanagement.php?action=managelist{if $q}&q={$q}{/if}&amp;page={$nextpage}&domainid={$domainid}&domain={$domain}&listaddress={$listaddress}&itemlimit={$itemlimit}&istab=tabremmembers#tabDelmem{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="tab-pane fade" id="tabManagemod">
        <div class="card">
            <div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<td colspan="2">
							<h3>{$LANG.rcmail_addmoderators} {$listaddress}</h3>
						</td>
					</tr>
					<tr>
						<td>
							{if $moderatorslist.1}
							{foreach key=num item=moderator from=$moderatorslist}
							<form method="post" action="emailmanagement.php?action=managelist#tabManagemod">
								<input type="hidden" name="domainid" value="{$domainid}"/>
								<input type="hidden" name="domain" value="{$domain}"/>
								<input type="hidden" name="deletemoderator" value="true"/>
								<input type="hidden" name="moderator" value="{$moderator}"/>
								<input type="hidden" name="listaddress" value="{$listaddress}"/>
								<input type="hidden" name="istab" value="tabmoderators"/>
								<div>
									<p>
										<strong>{$moderator}</strong>&nbsp;&nbsp;
										<input type="submit" value="{$LANG.cartremove}" onclick="return confirmModeratorDelete();" class="btn btn-danger btn-sm"/>
									</p>
								</div>
							</form>
							{/foreach}
							{else}
							{$moderatorslist.0}
							{/if}
						</td>
					</tr>
				</table>
				
				<br />
				
				<form method="post" action="emailmanagement.php?action=managelist#tabManagemod">
					<input type="hidden" name="domainid" value="{$domainid}"/>
					<input type="hidden" name="domain" value="{$domain}"/>
					<input type="hidden" name="addmoderator" value="true"/>
					<input type="hidden" name="listaddress" value="{$listaddress}"/>
					<input type="hidden" name="istab" value="tabmoderators"/>
					<table class="table table-bordered table-hover">
						<tr>
							<td width="200">
								{$LANG.rcmail_moderatorstitle} Emails
							</td>
							<td>
								{$LANG.rcmail_moderatorsdesc}<br/>
								<textarea class="form-control" name="moderators" cols="50" rows="5">{if $addmoderatorerror}{$smarty.post.moderators}{/if}</textarea>
							</td>
						</tr>
						<tr>
							<td>
								<strong>{$LANG.rcmail_note}</strong>
							</td>
							<td>
							{$LANG.rcmail_undeleteablemoddesc}
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<p align="center"><input type="submit" value="{$LANG.rcmail_addmoderatorbutton}" class="btn btn-success"/></p>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
	{literal}
		jQuery('#multiaction').on('submit',function(e){
			$form=jQuery(this);
			jQuery('input[type=checkbox]:checked').each(function(index,elem){
				var val=jQuery(elem).val(),name=jQuery(elem).attr('name');
				var hiddenInput=jQuery('<input type="hidden" value="'+val+'" name="'+name+'"/>');
				$form.append(hiddenInput);
			});
		});
	{/literal}
</script>