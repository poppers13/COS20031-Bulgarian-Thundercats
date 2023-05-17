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
        if (!isset ($_POST['category_id'])) {
            header("location:score_entry.php");
            exit();
        }
        
        // connect to the SQL database
        require_once ("db_settings.php");
        $sql_db = @mysqli_connect($host, $user, $pwd, $db_name);
        
        // initial values
        $category_id = $_POST['category_id'];
        $archer_id = $_POST['archer_id'];
        $division_id = $_POST['division_id'];
        $range_date = date("Y-m-d H:i:s"); // current date
        
        // retrieve values that define range
        // (for the purposes of testing, we'll assume that all ranges being shot follow the rules of the first range in a category)
        
        // find defined round for given category
        $query = "SELECT (defined_round_id) FROM Categories WHERE category_id = $category_id";
        $result = mysqli_query($sql_db, $query);
        $values = mysqli_fetch_assoc($result);
        $defined_round_id = $values['defined_round_id'];
        mysqli_free_result($result);
        
        // store number of ends associated with that defined round
        $query = "SELECT (num_ends) FROM DefinedRounds WHERE defined_round_id = $defined_round_id";
        $result = mysqli_query($sql_db, $query);
        $values = mysqli_fetch_assoc($result);
        $num_ends = $values['num_ends'];
        mysqli_free_result($result);
        
        // find the first defined range under the defined round; store target_size and target_distance
        $query = "SELECT (target_size, target_distance) FROM DefinedRanges WHERE defined_round_id = $defined_round_id ORDER BY order_num LIMIT 1";
        $result = mysqli_query($sql_db, $query);
        $values = mysqli_fetch_assoc($result);
        $target_size = $values['target_size'];
        $target_distance = $values['target_distance'];
        mysqli_free_result($result);
        
        
        ?>
        
        
        
        <p>test</p>
    </body>
</html>