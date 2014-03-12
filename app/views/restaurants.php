
<!doctype html>
<html>
<head>
  <title>Restaurants</title>
</head>
<body>

<h1>Yelp</h1>

<?php foreach ($restaurants as $restaurant) : ?>
    <div class="restaurant">
        <h4>
            Restaurant Name:
            <?php echo $restaurant->restaurant_name; ?>
            (<?php echo $restaurant->city; ?>)
        </h4>
        <p>Type: <?php echo $restaurant->type; ?></p>

        <?php
        if ($restaurant->facebook_page != null)
        {
            echo '
            <p>Facebook Page:
            <a href="http://facebook.com/' . $restaurant->facebook_page .
            '">Here!</a></p>
            ';
        }
        else
        {
            echo '<p>Not on Facebook </p>';
        }
        ?>

        <a href="/restaurants/<?php echo $restaurant->id ?>/review">View Reviews</a>

        <hr>
    </div>
<?php endforeach; ?>



</body>
</html>