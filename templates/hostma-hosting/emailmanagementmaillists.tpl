<div class="card">
	<div class="card-body">
		<script language="javascript" type="text/javascript">
			function confirmDelete(){literal}{{/literal}return confirm("{$LANG.rcmail_deletelistwarning}");{literal}}{/literal}
		</script>
		
		{if $listdeletedsuccess}
		<br />
		<div class="alert alert-success">
			<p>{$LANG.moduleactionsuccess}</p>
			<ul>
				{$listdeletedsuccess}
			</ul>
		</div>
		{/if}
		
		<div class="input-group mb-3">
			<form method="post" action="emailmanagement.php?action=managelists">
				<input type="hidden" name="domainid" value="{$domainid}"/>
				<input type="hidden" name="domain" value="{$domain}"/>
				<div class="input-group-append">
					<input type="text" name="q" value="{if $q}{$q}{else}{$LANG.rcmail_searchentercriteria}{/if}" class="form-control appended-form-control" onfocus="if(this.value=='{$LANG.rcmail_searchentercriteria}')this.value=''" />
					<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
				</div>		
			</form>
		</div>
		
		<br />
		<p>{$numproducts} {$LANG.recordsfound}, {$LANG.page} {$pagenumber} {$LANG.pageof} {$totalpages}</p>
		
		<table class="table table-sm table-bordered table-hover">
			<tr>
				<td {if $orderby eq "listname"} class="headerSort{$sort}"{/if}><a href="emailmanagement.php?action=managelists{if $q}&q={$q}{/if}&orderby=listname&domainid={$domainid}&domain={$domain}&sort={if $sort eq "desc"}asc{else}desc{/if}&page={$pagenumber}&itemlimit={$itemlimit}">{$LANG.rcmail_maillisttitle}</a></td>
				<td {if $orderby eq "subscribers"} class="headerSort{$sort}"{/if}><a href="emailmanagement.php?action=managelists{if $q}&q={$q}{/if}&orderby=subscribers&domainid={$domainid}&domain={$domain}&sort={if $sort eq "desc"}asc{else}desc{/if}&page={$pagenumber}&itemlimit={$itemlimit}">{$LANG.rcmail_numsubscriberstitle}</a></td>
				<td {if $orderby eq "moderators"} class="headerSort{$sort}"{/if}><a href="emailmanagement.php?action=managelists{if $q}&q={$q}{/if}&orderby=moderators&domainid={$domainid}&domain={$domain}&sort={if $sort eq "desc"}asc{else}desc{/if}&page={$pagenumber}&itemlimit={$itemlimit}">{$LANG.rcmail_nummoderatorstitle}</a></td>
				<td colspan="3"><a href="#" onclick="return false">{$LANG.rcmail_mailactions}</a></td>
			</tr>
			{foreach key=num item=service from=$searchdataKey}
			<tr>
				<td>
					<span class="d-inline-block text-truncate" style="max-width: 120px;" data-toggle="tooltip" data-placement="top" title="{$service.listname}@{$service.domainname}">{$service.listname}@{$service.domainname}</span>
				</td>
				<td>
					{$service.subscribers}
				</td>
				<td>
					{$service.moderators}
				</td>
				<td>
					<form method="post" action="emailmanagement.php?action=configmailinglist">
						<input type="hidden" name="domainid" value="{$domainid}"/>
						<input type="hidden" name="domain" value="{$domain}"/>
						<input type="hidden" name="listaddress" value="{$service.listname}@{$service.domainname}"/>
						<input type="submit" value="{$LANG.rcmail_configurebutton}" class="btn btn-outline-success btn-sm"/>
					</form>
				</td>
				<td>
					<form method="post" action="emailmanagement.php?action=managelist">
						<input type="hidden" name="domainid" value="{$domainid}"/>
						<input type="hidden" name="domain" value="{$domain}"/>
						<input type="hidden" name="listaction" value="manage"/>
						<input type="hidden" name="listaddress" value="{$service.listname}@{$service.domainname}"/>
						<input type="submit" value="{$LANG.rcmail_managemembersmoderadorsbutton}" class="btn btn-outline-primary btn-sm""/>
					</form>
				</td>
				<td>
					<form method="post" action="emailmanagement.php?action=managelists" onclick="return confirmDelete();">
						<input type="hidden" name="delete" value="true"/>
						<input type="hidden" name="domainid" value="{$domainid}"/>
						<input type="hidden" name="domain" value="{$domain}"/>
						<input type="hidden" name="listname" value="{$service.listname}"/>
						<input type="hidden" name="page" value="{$pagenumber}"/>
						<input type="hidden" name="itemlimit" value="{$itemlimit}"/>
						<input type="hidden" name="q" value="{$q}"/>
						<input type="submit" value="{$LANG.rcmail_deletebutton}" class="btn btn-outline-danger btn-sm""/>
					</form>
				</td>
			</tr>
			{foreachelse}
			<tr>
				<td colspan="7">
					{$LANG.norecordsfound}
				</td>
			</tr>
			{/foreach}
			{if $q neq ""}
			<tr>
				<td colspan="7">
					<form method="post" action="emailmanagement.php?action=managelists">
						<input type="hidden" name="q" value=""/> 
						<input type="hidden" name="domainid" value="{$domainid}"/>
						<input type="hidden" name="domain" value="{$domain}"/>
						<input type="submit" value="{$LANG.rcmail_deletesearchquerybutton}" class="btn btn-sm"/>
					</form>
				</td>
			</tr>
			{/if}
		</table>
		
		<br/>
		<div class="col-sm-5">
			<form action="emailmanagement.php">
				<input type="hidden" name="action" value="managelists" />
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
			</form>
			<br />
			<div class="btn-group" role="group" aria-label="pagination">
				<button type="button" class="btn btn-secondary" {if !$prevpage} disabled{/if}><a style="text-decoration:none;color:inherit;" href="{if $prevpage}emailmanagement.php?action=managelists{if $q}&q={$q}{/if}&amp;page={$prevpage}&domainid={$domainid}&domain={$domain}&itemlimit={$itemlimit}{else}javascript:return false;{/if}">&larr; {$LANG.previouspage}</a></button>
				<button type="button" class="btn btn-secondary" {if !$nextpage || $nextpage==$pageend} disabled{/if}><a style="text-decoration:none;color:inherit;" href="{if $nextpage != $pageend}emailmanagement.php?action=managelists{if $q}&q={$q}{/if}&amp;page={$nextpage}&domainid={$domainid}&domain={$domain}&itemlimit={$itemlimit}{else}javascript:return false;{/if}">{$LANG.nextpage} &rarr;</a></button>
			</div>
		</div>
	</div>
</div>