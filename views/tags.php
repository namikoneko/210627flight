tags.php!
<hr>

<div id="app">
<button v-on:click="show = !show">btn</button>
<div v-if="show">
<form action="taginsexe" method="post">
  <input type="text" name="title">
  <input type="submit" value="send">
    Toggle
</form>
</div>
<?php

//print_r($rows);
//echo "<hr>";
foreach ($rows as $row){
  echo "<a href='tag/" . $row["id"] . "'>" . $row["title"] . "</a>";
  echo "<br>";
}
?>
</div>
<script>
new Vue({
  el: '#app',
  data: {
    show: false
  }
})
//let jsStr = "<?php echo($list[0]);?>";
//console.log(jsStr);
</script>
