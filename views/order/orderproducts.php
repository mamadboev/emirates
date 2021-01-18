<!--malumotla toliq qatorda yakka bolmasligi uchun ularni tartibga solamiz col bilan-->

<div class="col-md-4">
    <div class="card" style="width: 250px;">
        <div class="col-md-6">
            <img src="/images/<?=\app\models\Product::findOne(['id'=>$model->product_id])->p_image;?>" style="width: 100px">
        </div>
         <div class="col-md-6">
             <div class="card-body">
                 <h4 ><?=\app\models\Product::findOne(['id'=>$model->product_id])->p_name_en;?></h4>
             </div>
         </div>
        <p class="card-subtitle mb-2 text-muted"><?=$model->b_count." dona = ";?><?=number_format(\app\models\Product::findOne(['id'=>$model->product_id])->price*$model->b_count,2)."$";?></p>

    </div>
</div>