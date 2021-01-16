<?php

namespace mustafaaktas0\futbolcu\models;

use Yii;

/**
 * This is the model class for table "oyuncu".
 *
 * @property string $oyuncu_adi
 * @property string $takim_adi
 * @property string $mevkisi
 * @property int $yas
 * @property string $maas
 * @property string $ulke
 * @property int $id
 *
 * @property Takim $takimAdi
 */
class Oyuncu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oyuncu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oyuncu_adi', 'takim_adi', 'mevkisi', 'yas', 'maas', 'ulke'], 'required'],
            [['yas'], 'integer'],
            [['oyuncu_adi', 'takim_adi', 'mevkisi', 'maas', 'ulke'], 'string', 'max' => 50],
            [['takim_adi'], 'exist', 'skipOnError' => true, 'targetClass' => Takim::className(), 'targetAttribute' => ['takim_adi' => 'takim_adi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'oyuncu_adi' => 'Oyuncu Adi',
            'takim_adi' => 'Takim Adi',
            'mevkisi' => 'Mevkisi',
            'yas' => 'Yas',
            'maas' => 'Maas',
            'ulke' => 'Ulke',
            'id' => 'ID',
        ];
    }

    /**
     * Gets query for [[TakimAdi]].
     *
     * @return \yii\db\ActiveQuery|TakimQuery
     */
    public function getTakimAdi()
    {
        return $this->hasOne(Takim::className(), ['takim_adi' => 'takim_adi']);
    }

    /**
     * {@inheritdoc}
     * @return OyuncuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OyuncuQuery(get_called_class());
    }
}
