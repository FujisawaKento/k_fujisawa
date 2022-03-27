<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>データ更新</h2>
<?php echo $this->Form->create('stock'); ?>

<?php if($user['username'] == '在庫発注管理者'): ?>
    <?php if($stock['status'] == '発注確認'): ?>
        <?= 'すでに発注確認されています'; ?>
    <?php elseif($stock['status'] == '発注確認'): ?>
        <?= $this->Form->control('status',['value'=>'発注状態','readonly']) ?>
    <?php elseif($stock['status'] == '発注済み'): ?>
        <?= $this->Form->control('status',['value'=>'発注受け取り済み','readonly']) ?>
    <?php endif ?>
<?php endif; ?>
<?php if($user['username'] == '在庫発注社'): ?>
    <?php if($stock['status'] == '発注済み'): ?>
        <?= 'すでに発注済みされています'; ?>
    <?php elseif($stock['status'] == '発注確認'): ?>
        <?= 'まだ発注状態にされていません'; ?>
    <?php else: ?>
        <?= $this->Form->control('status',['value'=>'発注済み','readonly']) ?>
    <?php endif ?>
<?php endif; ?>
<?php echo $this->Form->button('Add'); ?>
<?php echo $this->Form->end(); ?>
</body>
</html>
