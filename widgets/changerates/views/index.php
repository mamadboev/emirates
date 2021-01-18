<?php
$app_id = '4ba37ce0ad2645f7b95f5b190dadf78c';
if(!Yii::$app->cache->get('api')){
    $oxr_url = "https://openexchangerates.org/api/latest.json?app_id=" . $app_id;
    $data = Yii::$app->cache->set('api', $oxr_url);
}else{
    $data = Yii::$app->cache->get('api');
}

// Open CURL session:
$ch = curl_init($oxr_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


// Get the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$oxr_latest = json_decode($json);?>
<div class="col-md-4">
    <h5 align="center"><?php echo "1 USD = ".number_format($oxr_latest->rates->UZS,2)." UZS";?></h5>
</div>
<div class="col-md-4">
    <h5 align="center"><?php echo "1 RUB = ".number_format($oxr_latest->rates->UZS/$oxr_latest->rates->RUB,2)." RUB";?></h5>
</div>
<div class="col-md-4">
    <h5 align="center"><?php echo "1 EUR = ".number_format($oxr_latest->rates->UZS/$oxr_latest->rates->EUR,2)." EUR";?></h5>
</div>