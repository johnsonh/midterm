
<!doctype html>
<html>
<head>
    <title>Review</title>
</head>
<body>

<h1>Yelp</h1>

<h3> Reviews for <?php echo $restaurant->restaurant_name?> </h3>

<p>Facebook Activity</p>
<?php
    if (isset($fbpage))
    {
        echo
        '<ul>
            <li>Likes:' . $fbpage->likes . '</li>
            <li>Checkins: ' . $fbpage->checkins . '</li>
        </ul>';
    }
    else
    {
        echo '<p> None </p>';
    }
?>

<hr>

<?php foreach ($reviews as $review) : ?>
    <div class="review">
        <?php
        for ($i = 0; $i < $review->rating; $i++)
        {
            echo '<img src="http://upload.wikimedia.org/wikipedia/commons/2/27/AnimatedStar.gif">';
        }
        ?>
        <p>
            Review: <?php echo $review->review_description ?>
        </p>
        <hr>
    </div>
<?php endforeach; ?>




</body>
</html>