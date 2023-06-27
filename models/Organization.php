<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property int $id
 * @property string $organization
 *
 * @property Review $review
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organization'], 'required'],
            [['organization'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'organization' => 'Organization',
        ];
    }

    /**
     * Gets query for [[Review]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReview()
    {
        return $this->hasOne(Review::class, ['idOrganization' => 'id']);
    }
}
