<h1>List of authors</h1>
<table>
 <tr><th>ID</th><th>Name</th><th>Age</th><th>Learn more</th></tr>
 <?php
 for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
 $data->data_seek($row_no);
 $row = $data->fetch_assoc();
 echo
"<tr><td>".$row['Id']."</td><td>".$row['fio']."</td><td>".$row['age']."</td><td><a href='/journal/about/author/?id=".$row['Id']."'
target='_blank'>More</a></td></tr>";
 }
 ?>
</table>