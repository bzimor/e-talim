<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/4/14
 * Time: 2:31 PM
 */

namespace app\modules\admin\models\query;

use app\modules\admin\models\Content;
use yii\db\ActiveQuery;

class ContentQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function published()
    {
        $this->andWhere([Content::tableName() . '.status' => Content::STATUS_PUBLISHED]);
        $this->andWhere([Content::tableName() . '.is_deleted' => 0]);
        $this->andWhere(['>', '{{%content}}.published_at', 0]);
        return $this;
    }
}
