<h1>基礎学習ターム　確認テスト_もぎたて</h1>

<br>
<h2>環境構築</h2>
<br>

<h3>Dockerビルド</h3>
<br>

１，git clone リンク　


２．docker-compose up -d --build　
<br>




<h3>Laravel環境構築</h3>　
<br>

１，docker-compose exec php bash　　


２，composer install　


３，.env.exampleファイルから.envを作成し、環境変数を変更　


４，php artisan key:generate　


５，php artisan migrate　
<br>

<h3>github環境構築</h3>
<br>

1,git clone git@github.com:kirin-nagi/kakunin-test2.git
<br>

2,cd リポジトリ名
<br>

3,git remote set-url origin git@github.com:kirin-nagi/リポジトリ名.git
<br>

4,git add .
<br>

5,git commit -m "リモートリポジトリの変更"
<br>

6,git push origin main
<br>






<h2>使用技術</h2>　
<br>

１，Laravel 8.83.8　　


２，PHP 8.4.4　


３，MySQL 8.0　
<br>

<h2>ER図</h2>

![mogitate・ER図](https://github.com/user-attachments/assets/e022ee38-9719-469b-a866-b3b4eca6d759)

<h2>URL</h2>　　
<br>

・環境開発：  http://localhost/　


・phpMyAdmin:  http://localhost:8080/　　
