{extends file="layout.tpl"} 
{block "body"}

  <a href="/210622flight/shtns">return to shtns</a>
  <a href="/210622flight/tags">return to tags</a>
  {$rows[0].shtntitle}
  <a href="/210622flight/shtnupd/{$rows[0].shtnid}">update</a>
  <a href="/210622flight/shtndel/{$rows[0].shtnid}">delete</a>

<form action="/210622flight/postinsexeFromShtn/{$rows[0].shtnid}" method="post">
  <textarea name="text"></textarea>
  <input type="submit" value="send">
</form>

  {foreach $rows as $row}
    <p>
      {$row.posttitle}
      {$row.posttext}
      <a href="/210622flight/post/{$row.tagid}/{$row.postid}">post</a>
      <a href="/210622flight/postupdFromShtn/{$row.shtnid}/{$row.postid}">update</a>
      <a href="/210622flight/postdelFromShtn/{$row.shtnid}/{$row.postid}">delete</a>
    </p>
  {/foreach}
{*
      {$row.shtntitle}
*}
{/block}
