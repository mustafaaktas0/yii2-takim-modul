<?php

namespace mustafaaktas0\futbolcu\models;

/**
 * This is the ActiveQuery class for [[Takim]].
 *
 * @see Takim
 */
class TakimQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Takim[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Takim|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
