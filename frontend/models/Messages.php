<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $messageId
 * @property int|null $senderId
 * @property int|null $receiverId
 * @property string|null $message
 * @property string|null $sentAt
 * @property int|null $status
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['messageId'], 'required'],
            [['messageId', 'senderId', 'receiverId', 'status'], 'integer'],
            [['message'], 'string'],
            [['sentAt'], 'safe'],
            [['messageId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'messageId' => 'Message ID',
            'senderId' => 'Sender ID',
            'receiverId' => 'Receiver ID',
            'message' => 'Message',
            'sentAt' => 'Sent At',
            'status' => 'Status',
        ];
    }
}
