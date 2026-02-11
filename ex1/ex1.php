
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h3>Hello world! My name is David</h3>";

$title="<h4>PHP is interesting!</h4>";
echo $title;
$g1=5;
$g2=4;
$g3=5;
?>
<table border='1'>
<tr>
<th>S.n</th>
<th>Name</th>
<th>Grade</th>
</tr>

<tr>
<td>1</td>
<td>John</td>
<td><?php echo $g1; ?></td>
</tr>

<tr>
<td>2</td>
<td>Alice</td>
<td><?php echo $g2; ?></td>
</tr>

<tr>
<td>3</td>
<td>Bob</td>
<td><?php echo $g3; ?></td>
</tr>
</table>

<img src="img1.png" alt="My Screenshot" width="auto" height="200px">
</body>
</html>