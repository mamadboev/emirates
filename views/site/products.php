<?php
$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
    echo "<div class='row'>";
    echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'itemView'=>'item',
        'layout'=>"{items}\n{pager}",
    ]);
    echo "</div>";
?>



