# random-unique-hash-string
A PHP class to create a random hashed string

The method **random_bytes** generates an arbitrary length string of cryptographic random bytes that are suitable for cryptographic use, such as when generating salts, keys or initialization vectors.

[More details about random_bytes](https://www.php.net/manual/en/function.random-bytes.php)

An example:


```php
<?php
$hashedClass = new Hashedkey(8);
echo $hashedClass->get_hashed_key();
```

Will output:
6F70-4DFB-9B1C-D24D
