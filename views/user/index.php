<div style="font-size: 50px; text-align: center">Новости<br><br></div>

<?php foreach ($cats as $cat) {
  echo '<h1>'.$cat->title.'<br></h1>';
  echo '<h3>'.$cat->text.'<br></h3><br><br>';
} ?>
