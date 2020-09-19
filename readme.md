リアルタイムトレンド
===

## 概要
トレンドをリアルタイムに表示する見やすいシンプルなサイト

## 画面一覧

|  画面名  |  説明  |
| ---- | ---- |
|  トップページ  |  トレンドごとの商品を表示する。  |
|  商品一覧 |  追加した商品を一覧で表示する。 |
|  トレンド一覧 |  追加したトレンドを一覧で表示する。 |
|  ブランド一覧  |  追加したブランドを一覧で表示する 。 |
|  商品追加フォーム |  商品の登録や編集をする 。 |
|  トレンド作成フォーム |  トレンドの登録をする 。 |
|  ブランド作成フォーム |  ブランドの登録をする 。 |

## 開始方法

### SQLにて、データベースを作成する。
create database ＜データベース名＞;  
grant all on ＜データベース名＞.* to ＜DBユーザー名＞@localhost;  
flush privileges;  
set password for ＜DBユーザー名＞@localhost=password('＜DBパスワード＞');  

### 以下のコマンドを実行し、ソースをダウンロードする。
git clone https://github.com/naachi0301/jojotown.git

### 以下のコマンドを実行し、.envファイルを用意する。
cd jojotown  
cp .env.example .env  

### .envファイルの以下の部分のDBの設定を環境に合わせて変更する。
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=＜データベース名＞  
DB_USERNAME=＜DBユーザー名＞  
DB_PASSWORD=＜DBパスワード＞  

### 以下のコマンドを実行し、必要なライブラリをインストールする。
composer install

### 以下のコマンドを実行し、APP_KEYを作成する。
php artisan key:generate

### 以下のコマンドにて、migrationを実行する。
php artisan migrate

### 以下のコマンドにて、Webアプリケーションを起動する。
php artisan serve