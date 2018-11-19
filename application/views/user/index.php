<?php foreach ($user as $user_item ) { ?>
    <h1><?php echo $tittle;?> </h1> <br>

    <h1> <?php echo $user_item['email']; ?> </h1>
    <p> <?php echo $user_item['password']; ?> </p>
<?php } ?>