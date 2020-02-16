<?php

namespace app\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\YiiAsset;

class MainAssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@app/assets/';
	public $js = [
		'js/vendors.min.js',
		'js/jquery.ajaxchimp.min.js',
		'js/form-validator.min.js',
		'js/contact-form-script.js',
		'js/main.js',
	];
	public $css = [
		'css/vendors.min.css',
		'css/style.css',
		'css/responsive.css',
	];
	public $depends = [
		YiiAsset::class,
		BootstrapAsset::class,
	];
}
