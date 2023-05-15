<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- site-wide stylesheet -->
        <link rel = "stylesheet" type = "text/css" href = "style/style.css">
        
        <!-- metadata -->
        <title>Score Entry</title>
        <meta charset="UTF-8">
        <meta name="description" content="Entering scores">
        <meta name="author" content="Bailey Dunleavy, Dylan Truong, Kayes Ahmed">
    </head>
    
    <body>
        <?php 
        // connect to the SQL database
        require_once ("db_settings.php");
        $sql_db = @mysqli_connect($host, $user, $pwd, $db_name);
        ?>
        
        <p>test</p>
    </body>
</html>