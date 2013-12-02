<?php

/**
 * This is the model class for table "episoden".
 *
 * The followings are the available columns in table 'episoden':
 * @property integer $NRTOTAL
 * @property integer $NRSTAFFEL
 * @property string $DEUTSCHERTITEL
 * @property string $ORIGINAL­TITEL
 * @property string $ERSTAUS­STRAHLUNGUSA
 * @property string $DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D
 * @property string $REGIE
 * @property string $DREHBUCH
 * @property string $USQUOTEN
 * @property string $INHALT
 */
class Episoden extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'episoden';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NRTOTAL, NRSTAFFEL, DEUTSCHERTITEL, ORIGINAL­TITEL, ERSTAUS­STRAHLUNGUSA, DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D, REGIE, DREHBUCH, USQUOTEN, INHALT', 'required'),
			array('NRTOTAL, NRSTAFFEL', 'numerical', 'integerOnly'=>true),
			array('DEUTSCHERTITEL, ORIGINAL­TITEL, ERSTAUS­STRAHLUNGUSA, DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D, REGIE, DREHBUCH, USQUOTEN', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NRTOTAL, NRSTAFFEL, DEUTSCHERTITEL, ORIGINAL­TITEL, ERSTAUS­STRAHLUNGUSA, DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D, REGIE, DREHBUCH, USQUOTEN, INHALT', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NRTOTAL' => 'Nrtotal',
			'NRSTAFFEL' => 'Nrstaffel',
			'DEUTSCHERTITEL' => 'Deutschertitel',
			'ORIGINAL­TITEL' => 'Original­ Titel',
			'ERSTAUS­STRAHLUNGUSA' => 'Erstaus­ Strahlungusa',
			'DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D' => 'Deutsch­ Sprachigeerstaus­ Strahlung­ D',
			'REGIE' => 'Regie',
			'DREHBUCH' => 'Drehbuch',
			'USQUOTEN' => 'Usquoten',
			'INHALT' => 'Inhalt',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('NRTOTAL',$this->NRTOTAL);
		$criteria->compare('NRSTAFFEL',$this->NRSTAFFEL);
		$criteria->compare('DEUTSCHERTITEL',$this->DEUTSCHERTITEL,true);
		$criteria->compare('ORIGINAL­TITEL',$this->ORIGINAL­TITEL,true);
		$criteria->compare('ERSTAUS­STRAHLUNGUSA',$this->ERSTAUS­STRAHLUNGUSA,true);
		$criteria->compare('DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D',$this->DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D,true);
		$criteria->compare('REGIE',$this->REGIE,true);
		$criteria->compare('DREHBUCH',$this->DREHBUCH,true);
		$criteria->compare('USQUOTEN',$this->USQUOTEN,true);
		$criteria->compare('INHALT',$this->INHALT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Episoden the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
