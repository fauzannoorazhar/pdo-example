PHP Data Object
============================

Learning PDO (PHP Data Obejct)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      db/           contains console commands (controllers)
      images/             contains application configurations

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

~~~
First Install Xampp or another server local.
Second Run Apache and Mysql
~~~

Now you should be able to access the application through the following URL, assuming `pdo` is the directory
directly under the Web root.

~~~
http://localhost/pdo
~~~


CONFIGURATION
-------------

### Database

Edit the file `database.php` with real data, for example:

```php
try {
  $db = New PDO('mysql:host=serverhost;dbname=dbname', "username", "password");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo $e->getMessage();
  die();
}

```

**NOTES:**
- #100DayOfCodeChallenge
