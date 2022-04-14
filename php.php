<?php
class User {
    $firstname ='nuai';
    $lastname = 'yingniyom';
}
$query = sprintf("SELECT first, lastname,addresss,age,id Student, FROM friends
WHERE firstname='%s' AND lastname='%s'",
mysql_real_escape_strig($firstname),
mysql_real_escape_sting($lastname));

$result = mysql_query($query);
if (!result) {
    $message = 'Invalid query:' . mysql_error().
    "\n";
    $message .= 'Whole query:' .$query;
    die($message);
}
while ($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row ['address'];
    echo $row['age'];
    echo $row['id student'];
}
mysql_free_result($result);
?>