{extends file="layout.tpl"} 
{block "body"}

<a href="../../tag/{$rowtag.id}">return to tag</a>
<br>
{*
{$rowtag.title}
*}
<a href="/210622flight/tag/{$rowtag.id}">{$rowtag.title}</a>
<br>
{$rowpost.text}
<br>
{foreach $rows as $row}
  <a href="../../tag/{$row.tagid}">{$row.tagtitle}</a>
  <a href="../../tagrm/{$row.tagid}/{$row.postid}/{$rowtag.id}">(x)</a>
{*
  {if $row.tagid != $rowtag.id}
  {/if}
*}
{/foreach}
<form action="../../tagaddexe" method="post">
  <input type="hidden" name="tagid" value="{$rowtag.id}">
  <input type="hidden" name="postid" value="{$rowpost.id}">
  <input type="text" name="title">
  <input type="submit" value="send">
</form>

{*
*}
{/block}
