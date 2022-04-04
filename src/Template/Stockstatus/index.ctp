<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php if($user["username"] == '在庫発注社員'): ?>
            <a href='/stockstatus/add'>新しく在庫発注をする</a>
        <?php endif ?>
        <?php foreach ($stocks as $data):?>
        <?php if($data['status'] != null): ?>
            <table>
                <tr>
                    <td>
                        商品名：<?php echo $data["item"];?>
                    </td>
                    <td>
                        <?php echo $data["amount"];?>個
                    </td>
                    <td>
                        <?php echo $data["status"];?>
                    </td>
                    <td>
                        <?php if($user["username"] == '在庫発注管理者' && $data["status"] == '発注確認'): ?>
                            <a href='/stockstatus/<?= $data["id"] ?>/edit'>在庫発注を確認</a>
                        <?php endif ?>
                        <?php if($user["username"] == '在庫発注社' && $data["status"] == '発注状態'): ?>
                            <a href='/stockstatus/<?= $data["id"] ?>/edit'>在庫発注を確認</a>
                        <?php endif ?>
                        <?php if($user["username"] == '在庫発注管理者' && $data["status"] == '発注済み'): ?>
                            <a href='/stockstatus/<?= $data["id"] ?>/edit'>在庫発注を確認</a>
                        <?php endif ?>
                    </td>
                </tr>
            </table>
        <?php endif ?>
    <?php endforeach;?>
</body>
</html>

