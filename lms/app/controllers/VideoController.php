<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\forms\LoginForm;
use app\forms\ContactForm;

use app\modules\admin\models\Content;
use app\modules\admin\models\Playlist;
use app\modules\admin\models\Category;

class VideoController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return [
			'error'   => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class'           => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionItem($name = NULL, $playlist = NULL)
	{
        
        if ($current_video = Content::find()->where(['uuid' => $name, 'status' => Category::STATUS_ACTIVE])->one()) {
            $playlist_items = [];
            if ($playlist) {
                $playlist_items = Content::find()->where(['playlist.uuid' => $playlist])->orderBy(['published_at' => SORT_DESC])->leftJoin('playlist', 'playlist.id = content.playlist_id')->all();
            }
            $current_video->views ++;
            $current_video->save(FALSE);
            return $this->render('item', [
                'current_video' => $current_video,
                'playlist_items' => $playlist_items,
                'last_videos' => Content::find()->published()->limit(8)->orderBy(['published_at' => SORT_DESC])->all(),            
            ]);
        }
    }
}
