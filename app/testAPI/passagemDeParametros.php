<h1>passagemDeParametros</h1>

<p>URL ATUAL : <?php echo $_SERVER['REQUEST_URI'] ?></p>

<table>
  <tr>
    <th>Parâmetro 1:</th>
    <td><?php echo Url::getURL(0) ?></td>
  </tr>
  <tr>
    <th>Parâmetro 2</th>
    <td><?php echo Url::getURL(1) ?></td>
  </tr>
  <tr>
    <th>Parâmetro 3</th>
    <td><?php echo Url::getURL(2) ?></td>
  </tr>
  <tr>
    <th>Parâmetro 4</th>
    <td><?php echo Url::getURL(3) ?></td>
  </tr>
  <tr>
    <th>Parâmetro 5</th>
    <td><?php echo Url::getURL(4) ?></td>
  </tr>
  <tr>
    <th>Parâmetro 6</th>
    <td><?php echo Url::getURL(5) ?></td>
  </tr>
</table>
