<?php 
$myTitle = (string) 'My blog';
$numPosts = 0;
$numPostsDisplay= "$numPosts posts";

// Declaring and assigning global variables
define('MIN_NUM_POSTS', 0);
// Declaring and assigning local variables
const MAX_NUM_POSTS = 10;

$hasPosts = $numPosts > 0;
?>

<!-- shorthand echo -->
<h1><?= gettype($myTitle)?></h1>
<h3><?= $myTitle?></h3>
<p><?= gettype($numPosts)?></p>
<p><?= $numPosts?></p>

<p>Minimum: <?= MIN_NUM_POSTS ?></p>
<p>Maximum: <?= MAX_NUM_POSTS ?></p>
<?= $hasPosts ?>
<?= var_dump($hasPosts) ?>

<!-- <?php
if ($numPosts == 3){
    echo "There are 3 posts.";
} elseif ($hasPosts) {
    echo "Posts exists.";
} else {
    echo "There are no posts.";
}
?> -->

<!-- <?php if ($hasPosts): ?>
    <?php if ($numPosts == 3): ?>
        There are exactly 3 posts.
    <?php endif ?>
<?php else: ?>
    There are no posts.
<?php endif ?> -->

<!-- <?php
switch ($numPosts){
    case 0:
        $message = 'There are no posts';
        break;
    case 1:
    case 2:
    case 3:
        $message = 'There are a few posts';
        break;
    default:
        $message = 'There are hella posts';
}
?> -->

<?php
echo $numPosts;
$message = match ($numPosts){
    0 => 'There are no posts',
    1, 2, 3, 4, 5 => 'There are some posts',
    default => 'omg there\'s hella posts',
}
?>
<h1><?= $message ?></h1>