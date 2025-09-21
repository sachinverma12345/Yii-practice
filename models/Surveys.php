<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surveys".
 *
 * @property int $id
 * @property string $title
 * @property string $survey_id
 * @property string|null $description
 * @property int $status 1=>active,0=>inactive,2=>draft
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property SubmitSurveys[] $submitSurveys
 */
class Surveys extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surveys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'created_at', 'updated_at', 'deleted_at'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 1],
            [['title', 'survey_id'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['title', 'survey_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'survey_id' => 'Survey ID',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[SubmitSurveys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubmitSurveys()
    {
        return $this->hasMany(SubmitSurveys::class, ['survey_id' => 'id']);
    }

}
