<DOCTYPE html>
    <html>
    <form method="post" action="process.php">
        <select name="car">
            <?php
            $cars[0] = 'aaaaaa';
            $cars[1] = 'bbbbbb';
            $cars[2] = 'cccccc';
            $cars[3] = 'dddddd';
            $cars[4] = 'eeeeee';
            $cars[5] = 'ffffff';

            foreach ($cars as $car) {
                echo '<option value="'.$car.'">'.$car.'</option>';
            }
            ?>
        </select>
        <input type="submit" value="Select">
    </form>
    </html>