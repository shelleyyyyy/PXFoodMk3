<?php
include_once 'header.php';
?>

<section class="index-intro">
<?php
if(isset($_Session["userid"])) {
                    echo "<p> Hello there!" . $_SESSION["useruid"] . "</p>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign up</al></li>";
                    echo "<li><a href='login.php'>Log In</al></li>";
                }
                ?>
    <h1>intro</h1>
    <p>blah</p>
</secion>

<section class="index-categoreies">
    <h2>Basic</h2>
    <div class="index-categores-list">
        <div>
            <h3>fun</h3?>
</div>
<div>
<div>
            <h3>serious</h3?>
</div>
<div>
<div>
            <h3>exciting</h3?>
</div>
<div>
<div>
            <h3>boring</h3?>
</div>
<div>
</section>

<?php
include_once 'footer.php';
?>