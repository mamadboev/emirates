<?php
$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
/**
 * @var \yii\data\ActiveDataProvider $dataProvider1
 * @var \yii\data\ActiveDataProvider $dataProvider2
 * @var  $word
 */
if ($count > 0)
{
    echo "<div class='col-md-12' align='center' style='font-weight: bold'>";
    echo Yii::t('app',"So'rovingiz  ''$word'' bo'yicha $count ta maxsulot topildi");
    echo "</div>";
    echo "<div class='row'>";
    echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider1,
        'itemView'=>'item',
        'layout'=>"{items}\n{pager}",
    ]);
    echo "</div>";
}
else
{
    echo "<h4>";
    echo "<div class='col-md-12' align='center' style='font-weight: bold'>";
    echo  Yii::t('app',"So'rovingiz  ''$word'' bo'yicha maxsulot topilmadi");
    echo "</div>";
    echo "</h4>";
    echo "<div class='col-md-12' align='center'>";
    echo  Yii::t('app',"So'rovingizni o'zgartiring");
    echo "</div>";
    echo "<h2>";
    echo "<div class='col-md-12' align='center' style='font-weight: bold'>";
    echo  Yii::t('app',"Bizning eng sara mahsulotlarimiz bilan tanishib chiqishni istaysizmi ?");
    echo "</div>";
    echo "</h2>";
    echo "<div class='row'>";
    echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider2,
        'itemView'=>'item',
        'layout'=>"{items}\n{pager}",
    ]);
    echo "</div>";
}

?>



