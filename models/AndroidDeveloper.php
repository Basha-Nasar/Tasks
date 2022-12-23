<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "android_developer".
 *
 * @property int $emp_id
 * @property string $emp_name
 * @property string $emp_age
 * @property int $no_of_experience
 * @property string $language_used
 * @property string $framework_used
 */
class AndroidDeveloper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'android_developer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_name', 'emp_age', 'no_of_experience', 'language_used', 'framework_used'], 'required'],
            [['no_of_experience'], 'integer'],
            [['emp_name', 'emp_age', 'language_used', 'framework_used'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Emp ID',
            'emp_name' => 'Emp Name',
            'emp_age' => 'Emp Age',
            'no_of_experience' => 'No Of Experience',
            'language_used' => 'Language Used',
            'framework_used' => 'Framework Used',
        ];
    }
}
