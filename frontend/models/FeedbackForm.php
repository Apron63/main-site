<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class FeedbackForm extends ActiveRecord
{
    public $name;
    public $message;
    public $email;
    public $subject;
    public $body;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'required'],
            ['message', 'safe'],
            //[['name', 'email', 'subject', 'body'], 'required'],
            //['message', 'required'],
            // email has to be a valid email address
            //['email', 'email'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
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
            'verifyCode' => 'Verification Code',
        ];
    }
}
