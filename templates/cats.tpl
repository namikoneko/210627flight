{extends file="layout.tpl"} 
{block "body"}
{$cnt}

{for $i=0 to $cnt - 1 }
{*現在の行のcattitleが，1つ前の行のcattitleと異なるとき*}
 {if $rows[$i].cattitle != $rows[$i-1].cattitle}
   {*現在の行のcattitleが空白のとき*}
   {if $rows[$i].cattitle == ""}
    <p>
      タグなし
    </p>
   {else}
    <p>
      {$rows[$i].cattitle}
    </p>
  {/if}
{/if}
  <p>
    {$rows[$i].cattitle}:
    {$rows[$i].tagtitle}
  </p>
{/for}

{*
  {foreach $rows as $row}
  {if $row@first}
    <p>
    this is first
    </p>
  {/if}
    <p>
      {$row.cattitle}: {$row.tagtitle}
    </p>
  {/foreach}
*}

{/block}
