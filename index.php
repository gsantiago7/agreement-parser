<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <form method="post" action="config.php">
            <label>Paste your agreement here!</label>
            <textarea name="input" ></textarea>
            <input type="submit" value="submit">
        </form>

    <div>
        <?php
            $check = strpos($check , $housing);
            foreach($housing as $value => $c){
            echo str_replace($input, $c);
        }
        ?>
    </div>
    </body>
</html>