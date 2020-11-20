<html> 
<head><title>Лабораторная работа № 4</title></head>
<body>
  <form method='post'>
  
  <?php
  echo "Лабораторная работа № 4";
  echo "<br>Вариант 1";
  echo "<br>Press Login and Password please:";
  ?>
  <p>Login: <input type="text" name="username" required></p>
  <p>Password: <input type="password" name="password" required></p>
  <button type="submit" name="submit">Log in</button></p>
  </form> 
  <?php
  if (isset($_POST['submit'])){
  $login = implode(file ("Логин.txt"));
  $password = implode(file ("Пароль.txt"));
  
  if (strcmp ($login, $_POST['username']) == 0)
	{
	if (strcmp ($password, $_POST['password']) == 0){
	echo 'You logged in';}
	else echo 'Incorrect login or password'; 
	}
    else echo 'Incorrect login or password';  
  
  }
  ?>  
</body>
</html> 