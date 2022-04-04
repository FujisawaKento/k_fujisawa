# CakePHP Application Skeleton

在庫発注社員 pass:2022
在庫発注管理者 pass:2022
在庫発注社 pass:2022


ページ構成
User:
    index #ユーザーデータの一覧を表示
    login #ユーザーにログイン、その後stockstatus/indexへと飛びます
    logout #ログアウト、その後stockstatus/indexへと飛びます
    add #必要ないので今は消してます

stockstatus:
    index #データ一覧を表示、edit・addページへのリンクを表示
    edit #データのステータスのみを編集できます、（例）在庫発注管理者は発注状態・発注受け取り済みへとステータスを変更できます
    add #データを新しく追加します、在庫発注社員が発注確認をする時に使います


UserTable:
id,username,password

StockstatusTable:
id,item（商品名）,amount（発注数）,quantity（商品の値段）,status（在庫ステータス）
