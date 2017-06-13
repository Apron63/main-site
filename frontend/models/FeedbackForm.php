<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class FeedbackForm extends ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'main_feedback';
    }

    public function rules()
    {
        return [
            [['name', 'message'], 'required'],
            ['created_at', 'integer'],
            [['id', 'addr', 'ref_url', 'user_agent'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Представьтесь',
            'message' => 'Текст сообщения',
        ];
    }
}
