<html>
<head></head>

<body>
<table>
    <tr><td>Title</td><td>Author</td><td>ID</td></tr>
    <?php 
	foreach ($booklist as $title => $book)
	{
           echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->id.'</td></tr>';
	}?>
</table>

</body>
</html>