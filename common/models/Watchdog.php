<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main_watchdog".
 *
 * @property integer $id
 * @property integer $created_at
 * @property string $addr
 * @property string $ref_url
 * @property string $user_agent
 */
class Watchdog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_watchdog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'required'],
            [['created_at'], 'integer'],
            [['ref_url'], 'string'],
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
            'addr' => 'Addr',
            'ref_url' => 'Ref Url',
            'user_agent' => 'User Agent',
        ];
    }
}
