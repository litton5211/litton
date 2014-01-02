<?php

/**
 * This is the model class for table "{{search_index}}".
 *
 * The followings are the available columns in table '{{search_index}}':
 * @property integer $id
 * @property string $stdate
 * @property integer $cmatch
 * @property integer $page_type
 * @property integer $pv
 * @property integer $epv
 * @property integer $shows
 * @property integer $click
 * @property string $charge
 * @property string $bid
 * @property string $cash
 */
class SearchIndex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SearchIndex the static model class
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
		return '{{search_index}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stdate, cmatch, unit, pv, epv, shows, click, charge, bid, cash', 'required'),
			array('cmatch, unit, pv, epv, shows, click', 'numerical', 'integerOnly'=>true),
			array('charge, bid, cash', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, stdate, cmatch, unit, pv, epv, shows, click, charge, bid, cash', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'stdate' => 'Stdate',
			'cmatch' => 'Cmatch',
			'unit' => 'unit',
			'pv' => 'Pv',
			'epv' => 'Epv',
			'shows' => 'Shows',
			'click' => 'Click',
			'charge' => 'Charge',
			'bid' => 'Bid',
			'cash' => 'Cash',
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
		$criteria->compare('stdate',$this->stdate,true);
		$criteria->compare('cmatch',$this->cmatch);
		$criteria->compare('unit',$this->unit);
		$criteria->compare('pv',$this->pv);
		$criteria->compare('epv',$this->epv);
		$criteria->compare('shows',$this->shows);
		$criteria->compare('click',$this->click);
		$criteria->compare('charge',$this->charge,true);
		$criteria->compare('bid',$this->bid,true);
		$criteria->compare('cash',$this->cash,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}