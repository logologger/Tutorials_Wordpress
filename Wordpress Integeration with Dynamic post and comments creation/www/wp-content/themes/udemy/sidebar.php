<!--<div class="col-md-3">-->
<!--    <p class="lead">Shop Name</p>-->
<!--    <div class="list-group">-->
<!--        <a href="#" class="list-group-item active">Category 1</a>-->
<!--        <a href="#" class="list-group-item">Category 2</a>-->
<!--        <a href="#" class="list-group-item">Category 3</a>-->
<!--    </div>-->
<!--</div>-->
<div class="col-md-3">
<?php

if( (is_active_sidebar('ju_sidebar'))){

    dynamic_sidebar('ju_sidebar');
}

?>
</div>