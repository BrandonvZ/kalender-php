<?php

    $months = ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"];

    if(isset($_POST['Create'])) {
        createRow();
        header('location: ' . URL . 'home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>Day of birth</b></label>
        <input type="number" min="1" max="31" name="day" placeholder="8" required>
        <br>
        <label class="createLabel"><b>Month of birth</b></label>
        <select type="text" placeholder="Maand" name="month" required>
            <?php
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Name</b></label>
        <input type="text" placeholder="John Doe" name="name" required>
        <br>
        <label class="createLabel"><b>Year of birth</b></label>
        <input type="number" min="1900" max="2100" placeholder="1999" name="birth" required>
        <br>
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>    