{extends file="layout.tpl"} 
{block "body"}

<a href="/210622flight/tags">return to tags</a>

{foreach $rows as $row}
<p>
  {$row.posttext}
  <a href="tag/{$row.tagid}">{$row.tagtitle}</a>
</p>
{/foreach}

{/block}
