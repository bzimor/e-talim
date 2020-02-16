<?php

namespace app\controllers;

use Yii;
use app\modules\admin\models\Content;
use app\modules\admin\models\Playlist;
use app\modules\admin\models\Category;

class CategoryController extends Controller
{
	public $layout = 'category';
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
	public function actionIndex()
	{
		return $this->render('index', [
            'contents' => Content::find()->published()->all(),
            'categories' => Category::find()->active()->noParents()->all(),
            'playlist' => Playlist::find()->active()->all(),
        ]);
	}


    /**
	 * Displays category items.
	 *
	 * @return string
	 */
	public function actionItem($name = NULL)
	{
        if ($category = Category::find()->where(['slug' => $name, 'status' => Category::STATUS_ACTIVE])->one()) {
            
//            $this->active_menu = $category->slug;
            return $this->render('item', [
                'playlist_items' => Content::getContentsByCategory($category->id),
                'playlists' => Playlist::find()->where(['category_id' => $category->id])->orderBy(['sort_order' => SORT_ASC, 'name' => SORT_ASC])->active()->all(),
                'current_category' => $category,
            ]);
        }
        else {
            throw new \yii\web\NotFoundHttpException('Саҳифа мавжуд эмас');
        }

	}
}
