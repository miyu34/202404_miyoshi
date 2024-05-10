# アプリケーション名
お問い合わせフォーム
ログイン画面
登録画面
![image](https://github.com/miyu34/202404_miyoshi/assets/125182885/2799828b-0560-4c4d-8ce6-99bed582134a)


# 作成した目的
顧客からの意見を登録、保存する。
顧客のアカウント登録、管理
 
# アプリケーションURL
http://localhost/
http://localhost/register
http://localhost/login

# 環境構築
Duckerビルド  
1.git clone https://github.com/miyu34/202404_miyoshi.git  
2.Ducker compose up -d -build  

Laravel環境構築  
1.Ducker compose exec php bash  
2.composer install  
3..env.exampleファイルから.envを作成し、環境変数を変更  
4.php artisan key:generate  
5.php artisan migrate  
6.php artisan db:seed  
 
# 機能一覧
お問い合わせ内容登録 / 問い合わせ内容確認 / 探索機能/ユーザー登録/ログイン/ユーザー管理(探索機能・ユーザー管理 今回未作成。)
 
# 使用技術
Laravel Framework 8.83.27 / Git Hub / HTML / css
 
# テーブル設計
![image](https://github.com/miyu34/202404_miyoshi/assets/125182885/9ef3febb-82bb-4236-99e7-0c658e30bf2c)
![image](https://github.com/miyu34/202404_miyoshi/assets/125182885/fc31d809-65d5-4aba-b080-4ec18643e479)
![image](https://github.com/miyu34/202404_miyoshi/assets/125182885/c2a70ab9-1966-40d4-ba9d-041ba24b14a0)

# ER図
![image](https://github.com/miyu34/202404_miyoshi/assets/125182885/c43ff190-7280-4350-b8d7-58f0f352ebca)
