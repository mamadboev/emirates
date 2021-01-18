<!--malumotla toliq qatorda yakka bolmasligi uchun ularni tartibga solamiz col bilan-->

<?php $site = "http://shop_test.loc/index.php?r=site%2F";?>
<div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="/images/<?=$model->p_image;?>" style="width: 250px">
        <div class="card-body">
            <h6 class="card-title"><?=\app\models\Category::getCategoryname($model->category_id);?></h6>
            <h4><a href="product/guest-view?id=<?=$model->id;?>" class="card-subtitle mb-2 text-muted"><?=$model->p_name_en;?></a></h4>
            <p class="card-text">$<?=number_format($model->price,2);?></p>
            <p><a href="purchase?id=<?=$model->id.'&category='.$model->category_id;?>" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>

        </div>
    </div>
</div>