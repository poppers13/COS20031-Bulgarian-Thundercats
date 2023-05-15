<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- site-wide stylesheet -->
        <link rel = "stylesheet" type = "text/css" href = "style/style.css">
        
        <!-- metadata -->
        <title>Score Submission</title>
        <meta charset="UTF-8">
        <meta name="description" content="Submission of scores">
        <meta name="author" content="Aidan Davies">
    </head>
    
    <body>
        <?php 
        // REDIRECTION - checking if the first value has been entered, if not then terminate the code and send back to entry page
        if (!isset ($_POST['round'])) {
            header("location:score_entry.php");
            exit();
        }
        
        // connect to the SQL database
        require_once ("db_settings.php");
        $sql_db = @mysqli_connect($host, $user, $pwd, $db_name);
        ?>
        
        <p>test</p>
    </body>
</html>