```php:index.php
$conn = new mysqli('localhost', 'username', 'password', 'reservation_system');
```
```php:delete.php
$conn = new mysqli('localhost', 'username', 'password', 'database');
```
## 以下のように変更してください
localhost => MySQLサーバーのホスト名

username => MySQLユーザー名

password => MySQLパスワード

reservation_system/database => データベースの名前
