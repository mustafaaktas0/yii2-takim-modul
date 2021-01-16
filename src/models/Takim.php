<?php

namespace mustafaaktas0\futbolcu\models;

use Yii;

/**
 * This is the model class for table "takim".
 *
 * @property string $takim_adi
 *
 * @property Oyuncu[] $oyuncus
 */
class Takim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'takim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['takim_adi'], 'required'],
            [['takim_adi'], 'string', 'max' => 50],
            [['takim_adi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'takim_adi' => 'Takim Adi',
        ];
    }

    /**
     * Gets query for [[Oyuncus]].
     *
     * @return \yii\db\ActiveQuery|OyuncuQuery
     */
    public function getOyuncus()
    {
        return $this->hasMany(Oyuncu::className(), ['oyuncu_takim' => 'takim_adi']);
    }

    /**
     * {@inheritdoc}
     * @return TakimQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TakimQuery(get_called_class());
    }
}
