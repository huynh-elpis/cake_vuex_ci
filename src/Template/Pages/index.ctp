<section class="main-cont clearfix">
    <h2 class="from-search-header">
    TOP
        <span style="float:right;">
        <?php if($login){
            echo '<a href="/info">Information</a> | ';
            echo '<a href="/user/logout">logout</a>';
        }else{
            echo '<a href="/user/login">login</a>';
        } ?>
        </span>
    </h2>
</section>
