<form action="themes.php" method="post">
    <?php if($_SESSION["theme"] == "woodland"):?>
    <div class="form-group">
        <input type="radio" name="theme" value="rustic"> Rustic beige
    </div>
    <div class="form-group">
        <input type="radio" name="theme" value="ocean"> Ocean Sunset
    </div>
    <div class="form-group">
        <input type="radio" name="theme" value="woodland" checked> Misty Woodland
    </div>
    <?php elseif($_SESSION["theme"] == "ocean"):?>
    <div class="form-group">
        <input type="radio" name="theme" value="rustic"> Rustic beige
    </div>
    <div class="form-group">
        <input type="radio" name="theme" value="ocean" checked> Ocean Sunset
    </div>
    <div class="form-group">
        <input type="radio" name="theme" value="woodland"> Misty Woodland
    </div>
    <?php else:?>
    <div class="form-group">
        <input type="radio" name="theme" value="rustic" checked> Rustic beige
    </div>
    <div class="form-group">
        <input type="radio" name="theme" value="ocean"> Ocean Sunset
    </div>
    <div class="form-group">
        <input type="radio" name="theme" value="woodland"> Misty Woodland
    </div>
    <?php endif?>
    <button class="btn btn-default theme" type="submit">Save <span class="glyphicon glyphicon-ok"/></button>
</form>