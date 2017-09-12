<?php
/** @var \yii\web\View $this */
wscvua\ServerTime\ServerTimeAsset::register($this);

$amount = time();
$amount = (new \DateTime())->getTimestamp();
?>
<div id="time" data-timestamp="<?= $amount; ?>"></div>