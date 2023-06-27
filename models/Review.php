<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property string $head
 * @property string $description
 * @property int $idUser
 * @property int $idOrganization
 *
 * @property Organization $idOrganization0
 * @property User $idUser0
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['head', 'description', 'idOrganization'], 'required'],
            [['idUser', 'idOrganization'], 'integer'],
            [['head', 'description'], 'string', 'max' => 255],
            [['idOrganization'], 'unique'],
            [['idOrganization'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::class, 'targetAttribute' => ['idOrganization' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'head' => 'Head',
            'description' => 'Description',
            'idUser' => 'Id User',
            'idOrganization' => 'Id Organization',
        ];
    }

    /**
     * Gets query for [[IdOrganization0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrganization0()
    {
        return $this->hasOne(Organization::class, ['id' => 'idOrganization']);
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::class, ['id' => 'idUser']);
    }
}
