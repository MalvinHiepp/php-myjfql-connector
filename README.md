# PHP-MyJFQL-Connector
PHP-Connector for Database [MyJFQL](https://github.com/joker-games/MyJFQL).

## How to use:

1. Create new PHP file
2. Paste
    ```
    <?php
    include 'connector.php';

    $url = 'http://localhost:2291/query';
    $user = 'root';
    $password = 'pw';

    echo query($url, $user, $password, 'MyJFQL command');
    ```
    into your file and replace
    ```
    $url
    $user
    $password
    ```
    to youre data.
3. Now you type the MyJFQL Command to 
   ```
   'MyJFQL command'
   ```
4. If you enter the page, youre database will be pasted there.

## WARNING: If you use Apache2, you have to install the php7.4-curl extension!
    
    sudo apt-get install php7.4-curl
    systemctl restart apache2
    
