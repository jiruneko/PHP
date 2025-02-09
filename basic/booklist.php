<?php

$db = new mysqli("localhost", "petermac", "password", "library");

if ($db->connect_error) {
    die("Connect Error ({$db->connect_errno}) {$db->connect_error}");
}

$sql = "SELECT * FROM books WHERE available = 1 ORDER BY title";
$result = $db->query($sql);

?>
<html>

<body>
    <table cellSpacing="2" cellPadding="6" align="center" border="1">
        <tr>
            <td colspan="4">
                <h3 align="center">これらの書籍は現在入手可能です</h3>
            </td>
        </tr>

        <tr>
            <td align="center">タイトル</td>
            <td align="center">出版年</td>
            <td align="center">ISBN</td>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo stripslashes($row['title']); ?></td>
                <td align="center"><?php echo ($row['pub_year']); ?></td>
                <td><?php echo $row['ISBN']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>