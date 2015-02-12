<?php

namespace app\models;
use frontend\models\Posts;
use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_description
 * @property integer $autor_id
 *
 * @property Users $autor
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'post_description', 'autor_id'], 'required'],
            [['post_description'], 'string'],
            [['autor_id'], 'integer'],
            [['post_title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_description' => 'Post Description',
            'autor_id' => 'Autor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutor()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'autor_id']);
    }
}
