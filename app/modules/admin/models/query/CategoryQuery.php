<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/4/14
 * Time: 2:31 PM
 */

namespace app\modules\admin\models\query;

use app\modules\admin\models\Category;
use yii\db\ActiveQuery;

class CategoryQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function active()
    {
        $this->andWhere([Category::tableName() . '.status' => Category::STATUS_ACTIVE]);
        $this->andWhere([Category::tableName() . '.is_deleted' => 0]);

        return $this;
    }

    /**
     * @return $this
     */
    public function noParents()
    {
        $this->andWhere('{{%category}}.parent_id IS NULL');

        return $this;
    }
}
