<?php
/**
 * Created by PhpStorm.
 * User: Sardor Dushamov <t.me/SardorOga>
 * Date: 2/16/20
 * Time: 7:17 AM
 */
$this->beginContent('@app/views/layouts/main.php'); ?>
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-two item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="<?= \yii\helpers\Url::home() ?>">Home</a></li>
                    <li>Category</li>
                </ul>
                <h2>Category List</h2>
            </div>
        </div>
    </div>
<?= $content; ?>
<?php $this->endContent();