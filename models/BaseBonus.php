<?php

namespace jumper423\module\bonus\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;


/**
 * @property integer $id
 * @property string $series
 * @property integer $number
 * @property integer $generate_at
 * @property integer $completion_at
 * @property integer $use_at
 * @property boolean $active
 */
class BaseBonus extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bonus}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['series', 'number', 'generate_at', 'completion_at', 'active'], 'required'],
            [['series'], 'string', 'max' => 64],
            [['number'], 'unique',],
            [['number',], 'integer'],
            [['generate_at', 'completion_at', 'use_at'], 'integer'],
            [['active'], 'boolean'],
        ];
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'generate_at',
                ],
            ],
        ];
    }
}
