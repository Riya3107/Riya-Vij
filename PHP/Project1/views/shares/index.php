<style>
    .well{
        margin-bottom: 50px;
        padding: 30px;
    }
</style>

<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-success btn-share" style="margin-bottom: 30px;" >Share Something</a>
    <?php endif; ?>
    <?php foreach($viewmodel as $item) : ?>
        <div class="well" style="background-color: #E8E8E8;">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr />
            <p><?php echo $item['body'];  ?></p>
            <a href="<?php echo $item['link']; ?>" target="_blank" class="btn btn-default" style="margin-bottom: 50px;" >Go to website</a>
        </div>
    <?php endforeach; ?>
</div>