<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/4/14
 * Time: 2:31 PM
 */

namespace app\modules\admin\models\query;

use app\modules\admin\models\Playlist;
use yii\db\ActiveQuery;

class PlaylistQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function active()
    {
        $this->andWhere([Playlist::tableName() . '.status' => Playlist::STATUS_ACTIVE]);
        $this->andWhere([Playlist::tableName() . '.is_deleted' => 0]);

        return $this;
    }

    /**
     * @return $this
     */
    public function foraday()
    {
        $this->andWhere('DATE({{%playlist}}.start_date) = CURDATE()');

        return $this;
    }
}
