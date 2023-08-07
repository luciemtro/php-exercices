
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET - POST</title>
</head>

<body>
    <a href="/index.php">Retour au menu</a>
    <h2>Form GET</h2>
	<form method="get" action="form.php">
	  <input type="text" name="name">
	  <input type="text" name="lang">
	  <input type="submit" value="submit">
	</form>

    <br>
    <?php
        if(isset($_GET['name'])){
            $name = $_GET['name']; 
            $lang = $_GET['lang'];
        }

        function greeting(){
            if(isset($_GET['name'], $_GET['lang'])) {
                $name = $_GET['name']; 
                $lang = $_GET['lang'];
                echo "Hello, " . $name . "<br>";
                echo "Tu parles le " . $lang;
            }
        }
        greeting(); 
    ?>

    <h2>Form POST</h2>
    <form method="post" action="form.php">
        <input type="text" name="name">
        <input type="text" name="lang">
        <input type="submit" value="submit">
    </form>

    <?php
        if (isset($_POST['name'], $_POST['lang'])) {
            $name = $_POST['name'];
            $lang = $_POST['lang'];
            echo $name . '<br>'; 
            echo $lang;
        }
    ?>
</body>

</html>