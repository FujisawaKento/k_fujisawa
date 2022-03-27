<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="stock form">
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Add Stock') ?></legend>
        <select name="item" id="item">
            <option value="値を選択してください" disabled selected>値を選択してください</option>
            <option value="セブンスター">セブンスター</option>
            <option value="ピース">ピース</option>
            <option value="メビウス">メビウス</option>
            <option value="ピアニッシモ">ピアニッシモ</option>
            <option value="ウィンストン">ウィンストン</option>
            <option value="キャメル">キャメル</option>
        </select>
        <?= $this->Form->control('quantity',['type'=>'number']) ?>
        <?php if($user['username'] == '在庫発注社員'): ?>
            <?= $this->Form->control('status',['value'=>'発注確認','readonly']) ?>
        <?php endif; ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
</body>
</html>
