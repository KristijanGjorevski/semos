<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Navigation</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($users as $user){
    echo "<tr>";
    echo "<td>$user[firstname]</td>";
    echo "<td>$user[lastname]</td>";
    echo "<td><a href='?params=users/getUsers/$user[id]' >User</a></td>";
    echo "</tr>";
}
?>
    <a href="?params"></a>

    </tbody>
</table>