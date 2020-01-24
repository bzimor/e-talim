<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\query\ContentQuery;
use trntv\filekit\behaviors\UploadBehavior;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $photo
 * @property string $file
 * @property int $playlist_id
 * @property string $duration
 * @property int $status
 * @property int $created_by
 * @property int $is_deleted
 * @property string $created_at
 * @property string $updated_at
 * @property string $published_at
 *
 * @property User $createdBy
 * @property Playlist $category
 */
class Content extends \yii\db\ActiveRecord
{
    const STATUS_PUBLISHED = 1;
    const STATUS_DRAFT     = 0;
    
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @return ContentQuery
     */
    public static function find()
    {
        return new ContentQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => UploadBehavior::class,
                'attribute' => 'photo',
                'pathAttribute' => 'photo_path',
                'baseUrlAttribute' => 'photo_base_url',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['playlist_id', 'status', 'created_by', 'is_deleted'], 'integer'],
            [['youtube_url', 'file', 'duration', 'created_at', 'updated_at', 'published_at', 'photo'], 'safe'],
            [['name', 'photo_base_url', 'photo_path', 'file', 'uuid'], 'string', 'max' => 255],
            [['playlist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Playlist::className(), 'targetAttribute' => ['playlist_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nomi'),
            'description' => Yii::t('app', 'Tavsifi'),
            'photo' => Yii::t('app', 'Rasm'),
            'file' => Yii::t('app', 'Fayl'),
            'youtube_url' => Yii::t('app', 'Youtube linki'),
            'playlist_id' => Yii::t('app', "Ko'rsatuv"),
            'duration' => Yii::t('app', 'Davomiyligi'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Muallif'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'published_at' => Yii::t('app', 'Chop etildi'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlaylist()
    {
        return $this->hasOne(Playlist::className(), ['id' => 'playlist_id']);
    }


    public static function getContentsByCategory($category_id)
    {
        $contents = Content::find()
            ->where(['category_id' => $category_id, Content::tableName() . '.status' => self::STATUS_PUBLISHED, Content::tableName() . '.is_deleted' => 0])
            ->leftJoin('playlist', 'content.playlist_id = playlist.id')
            ->orderBy(['published_at' => SORT_DESC])
            ->all();
        $grouped = [];
        if ($contents) {
            foreach ($contents as $key => $value) {
                $grouped[$value->playlist_id][] = $value;
            }
        }
        return $grouped;
    }
    
}
