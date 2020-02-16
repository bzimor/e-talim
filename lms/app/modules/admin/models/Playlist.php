<?php

namespace app\modules\admin\models;
use app\modules\admin\models\query\PlaylistQuery;

use Yii;

/**
 * This is the model class for table "playlist".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property string $start_date
 * @property string $duration
 * @property int $status
 * @property int $created_by
 * @property int $is_deleted
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Category $category
 */
class Playlist extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DRAFT  = 0;

    public $photo_path;
    public $total_content;
    public $content_uuid;
    public $photo_base_url;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'playlist';
    }

    /**
     * @return PlaylistQuery
     */
    public static function find()
    {
        return new PlaylistQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort_order', 'name'], 'required'],
            [['description'], 'string'],
            [['sort_order', 'category_id', 'status', 'created_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'category_id' => Yii::t('app', 'Category'),
            'status' => Yii::t('app', 'Status'),
            'sort_order' => Yii::t('app', 'Sort'),
            'created_by' => Yii::t('app', 'Author'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'created_at' => Yii::t('app', 'CreatedAt'),
            'updated_at' => Yii::t('app', 'UpdatedAt'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }


    public static function getPlaylistsByCategory()
    {
        $playlists = Playlist::find()
            ->select('playlist.*, content.photo_base_url, COUNT(DISTINCT(content2.id)) as total_content, content.photo_path, content.uuid as content_uuid')
            ->where([Playlist::tableName() . '.status' => self::STATUS_ACTIVE, Playlist::tableName() . '.is_deleted' => 0])
            ->leftJoin('(SELECT MIN(content.id) id, playlist_id FROM content GROUP BY playlist_id) playlist_content', 'playlist_content.playlist_id = playlist.id')
            ->leftJoin('content', 'content.id = playlist_content.id')
            ->leftJoin('content as content2', 'content2.playlist_id = playlist.id')
            ->orderBy('playlist.name')
            ->groupBy(['playlist.id', 'content.photo_base_url', 'content.photo_path', 'content.uuid'])
            ->all();
        $grouped = [];
        if ($playlists) {
            foreach ($playlists as $key => $value) {
                $grouped[$value->category_id][] = $value;
            }
        }
        return $grouped;
    }

    public function getPlaylistsForMenu()
    {
        $playlists = Playlist::find()
            ->select('playlist.name, playlist.uuid, category_id')
            ->where([Playlist::tableName() . '.status' => self::STATUS_ACTIVE, Playlist::tableName() . '.is_deleted' => 0])
            ->orderBy('playlist.name')
            ->groupBy('playlist.id')
            ->all();
        $grouped = [];
        if ($playlists) {
            foreach ($playlists as $key => $value) {
                $grouped[$value->category_id][] = $value;
            }
        }
        return $grouped;
    }
}
