<?php

namespace mustafaaktas0\futbolcu\models;

/**
 * This is the ActiveQuery class for [[Oyuncu]].
 *
 * @see Oyuncu
 */
class OyuncuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Oyuncu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Oyuncu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
