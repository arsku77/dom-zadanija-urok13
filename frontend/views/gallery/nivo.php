<?php

/* @var $this yii\web\View */
use Yii;
use frontend\assets\SlidderNivoAsset;
//
SlidderNivoAsset::register($this);
$this->registerJsFile('@web/js/gallery/slidders/nivo/scripts.js', ['depends' => [
    SlidderNivoAsset::className()
]]);
?>

<h1>Gallery</h1>


<div class="portfolioFilter">

    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".people">People</a>
    <a href="#" data-filter=".places">Places</a>
    <a href="#" data-filter=".food">Food</a>
    <a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">
    <div class="objects">
        <img src="<?php echo Yii::getAlias('@gallery').'/watch.jpg';?>" alt="image">
    </div>

    <div class="people places">
        <img src="<?php echo Yii::getAlias('@gallery').'/surf.jpg';?>" alt="image">
    </div>	

    <div class="food">
        <img src="<?php echo Yii::getAlias('@gallery').'/burger.jpg';?>" alt="image">
    </div>

    <div class="people places">
        <img src="<?php echo Yii::getAlias('@gallery').'/subway.jpg';?>" alt="image">
    </div>

    <div class="places objects">
        <img src="<?php echo Yii::getAlias('@gallery').'/trees.jpg';?>" alt="image">
    </div>

    <div class="people food objects">
        <img src="<?php echo Yii::getAlias('@gallery').'/coffee.jpg';?>" alt="image">
    </div>

    <div class="food objects">
        <img src="<?php echo Yii::getAlias('@gallery').'/wine.jpg';?>" alt="image">
    </div>	

    <div class="food">
        <img src="<?php echo Yii::getAlias('@gallery').'/salad.jpg';?>" alt="image">
    </div>	

</div>
