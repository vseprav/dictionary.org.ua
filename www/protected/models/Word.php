<?php

/**
 * This is the model class for table "{{words}}".
 *
 * The followings are the available columns in table '{{words}}':
 * @property integer $id
 * @property integer $dictionary_id
 * @property string $title
 * @property string $phonetic
 * @property string $pronunciation
 * @property string $pos
 * @property string $definition
 * @property string $translation
 */
class Word extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Words the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{words}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, phonetic, pronunciation, pos', 'required'),
			array('dictionary_id', 'numerical', 'integerOnly'=>true),
			array('title, phonetic, pronunciation, pos', 'length', 'max'=>255),
			array('definition, translation', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, dictionary_id, title, phonetic, pronunciation, pos, definition, translation', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'dictionary' => array(self::BELONGS_TO, 'Dictionary', 'dictionary_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dictionary_id' => 'Dictionary',
			'title' => 'Title',
			'phonetic' => 'Phonetic',
			'pronunciation' => 'Pronunciation',
			'pos' => 'Pos',
			'definition' => 'Definition',
			'translation' => 'Translation',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('dictionary_id',$this->dictionary_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('phonetic',$this->phonetic,true);
		$criteria->compare('pronunciation',$this->pronunciation,true);
		$criteria->compare('pos',$this->pos,true);
		$criteria->compare('definition',$this->definition,true);
		$criteria->compare('translation',$this->translation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}