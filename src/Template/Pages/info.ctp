<section class="main-cont clearfix">
    <h2 class="from-search-header">
    <a href="/">TOP</a>
    INFORMATION
        <span style="float:right;">
        <?php if($login){
            echo '<a href="/user/logout">logout</a>';
        }else{
            echo '<a href="/user/login">login</a>';
        } ?>
        </span>
    </h2>
    <div>
    <?php
    pr($login);
    ?>
    </div>
</section>
