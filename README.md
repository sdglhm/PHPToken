# PHPToken
This small class will help you to generate a token for check against CSRF


##Usage

Download and extract following files to your PHP script directory.

Look, a list!

 * Session.php
 * Token.class.php

At the top of the PHP page, add these codes.

```php
<?php

  require 'Session.php';
  require 'Token.class.php';

?>

```

If you have any textual output before the 'Session.php' code, it will output you an error. Also this is optional if your PHP code is starting a Session.

Use following code to generate a Token using PHPToken.

```php
<?php

  $generated_token = Token::generate();

?>

```

You can use Echo $generated_token; to print out your generate Token. Lets assume you posted the token using POST method to another PHP page.

######Sample form

```html
<?php 
  require 'Session.php';
  require 'Toke.class.php';
?>

<html>
  <body>
  
    <form method="post">
    
      <input type="text" name="f_name"/>
      <input type="hidden" name="Token" value="<?php echo Token::generate();?>"/>
      
      <input type="submit"/>
    </form>
  
  </body>
</html>

```

######Sample PHP page

```php
<?php
	require 'Session.php';
    
	if( $_SESSION['token'] == $_POST['Token'] ){
    	echo "hello " . $_POST['f_name'];
    }else{
    	echo "Possible CSRF detected !";
    }
?>


```

<hr>
Made with <span style="color:red">&heart;</span> from Sri Lanka
