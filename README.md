
## Cyber security


## apacheの起動と停止方法
 `sudo service apache2 start`
 `sudo service apache2 stop`

## configuration

phpのインストール
```
sudo apt-get --purge remove php*
sudo apt-get install php php-xml
apt install apache2 libapache2-mod-php7.3
sudo systemctl restart apache2
```


筆者の環境
```
Server version: Apache/2.4.41 (Ubuntu)
Server built:   2022-06-14T13:30:55
```
```
uname -a 
Linux raspberrypi 5.15.32-v8+ #1538 SMP PREEMT 
```

## Reference
- https://nekotosec.com/verification-oscommand-injection-1/
- https://nekotosec.com/verification-oscommand-injection-2/

# OS command Injection

`tmp; cat /etc/passwd`や,`tmp; ls`と入力してみましょう.

 ### 対策方法
 shell_exec()などのシェルを直接呼び出す関数を使用しない

# File Uploadの脆弱性

## 環境設定

`/var/www/`に`cyber`というディレクトリを作る/

`/cyber`というディレクトリ下に`img/`というディレクトリを作る.


なお,`/var/www/cyber/`下にファイルを作る際には管理者権限が必要なので,適切な処理をする(sudoなど).

つづいて,imgディレクトリに権限を持たせる. これはphpの関数move_uploaded_file() の第二引数のディレクトリには管理者権限が必要だからである.

以下のコマンドを打つ.
```
sudo chmod 777 img
```

つづいて`/var`というディレクトリ下に`imgCyber/`というディレクトリを作る.
同様の手順を踏む.

`/img`というディレクトリ下にはユーザがディレクトリトラバーサルでアクセス可能.


## 実行
 injection1.php,をアップロードしてみる.
 アップロードしたファイルを開いてみると,injection1.phpに書かれているコード`/bin/cat /etc/passwd`が実行される.
 
 injection2.phpについても同様
