<?php

/**
 * This is the model class for table "asea_conf_trade".
 *
 * The followings are the available columns in table 'asea_conf_trade':
 * @property integer $trade_id
 * @property string $trade_name
 * @property integer $parent_tradeid
 * @property integer $trade_level
 */
class TradeConf extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TradeConf the static model class
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
		return 'kenan_conf_trade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trade_id, parent_tradeid, trade_level', 'numerical', 'integerOnly'=>true),
			array('trade_name', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('trade_id, trade_name, parent_tradeid, trade_level', 'safe', 'on'=>'search'),
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
			'trade_id' => 'Trade',
			'trade_name' => 'Trade Name',
			'parent_tradeid' => 'Parent Tradeid',
			'trade_level' => 'Trade Level',
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

		$criteria->compare('trade_id',$this->trade_id);
		$criteria->compare('trade_name',$this->trade_name,true);
		$criteria->compare('parent_tradeid',$this->parent_tradeid);
		$criteria->compare('trade_level',$this->trade_level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * get trade child
	 */
	public static  function getTrades($parent_id=null)
	{
		$tradeList= array();
		if(is_null($parent_id)){
			$trades = TradeConf::model()->findAllByAttributes(array('parent_tradeid'=>null),array('order'=>'trade_id asc'));
		}else{
			$trades = TradeConf::model()->findAllByAttributes(array('parent_tradeid'=>$parent_id),array('order'=>'trade_id asc'));
		}
		
		foreach ($trades as $trade){
				array_push($tradeList,
					array('id'=>$trade['trade_id'],
						  'name'=>$trade['trade_name'],
						  'parent_id'=>$trade['parent_tradeid'],
						  'level'=>$trade['trade_level'],
						  'is_leaf'=>$trade['is_leaf']));			
		}
		
		return $tradeList;
	}
}