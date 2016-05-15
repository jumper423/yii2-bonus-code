<?php

namespace jumper423\module\bonus\models;

use Yii;

class Bonus extends BaseBonus
{
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'series' => 'Серия',
            'number' => 'Номер',
            'generate_at' => 'Дата генерации',
            'completion_at' => 'Дата окончания',
            'use_at' => 'Дата использования',
            'active' => 'Активен',
        ];
    }
}
