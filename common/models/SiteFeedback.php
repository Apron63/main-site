<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_feedback".
 *
 * @property integer $id
 * @property integer $created_at
 * @property string $name
 * @property string $message
 * @property string $addr
 * @property string $ref_url
 * @property string $user_agent
 */
class SiteFeedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'name', 'message', 'addr', 'ref_url', 'user_agent'], 'required'],
            [['created_at'], 'integer'],
            [['message', 'ref_url'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['addr'], 'string', 'max' => 15],
            [['user_agent'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'name' => 'Name',
            'message' => 'Message',
            'addr' => 'Addr',
            'ref_url' => 'Ref Url',
            'user_agent' => 'User Agent',
        ];
    }
}
