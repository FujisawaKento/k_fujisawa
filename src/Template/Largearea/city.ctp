<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
    <?php foreach ($city as $data):?>
    <table>
        <tr>
            <td>
                <?php echo $data["name"];?>
            </td>
            <td>
                <?php echo $data["citycode"];?>
            </td>
        </tr>
    </table>
    <?php endforeach;?>
</body>
</html>

