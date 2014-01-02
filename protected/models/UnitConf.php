<?php

/**
 * This is the model class for table "{{conf_unit}}".
 *
 * The followings are the available columns in table '{{conf_unit}}':
 * @property integer $unit_id
 * @property string $unit_name
 * @property integer $parent_unitid
 * @property integer $unit_level
 * @property integer $is_leaf
 */
class UnitConf extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UnitConf the static model class
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
		return '{{conf_unit}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('unit_id, parent_unitid, unit_level, is_leaf', 'numerical', 'integerOnly'=>true),
			array('unit_name', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('unit_id, unit_name, parent_unitid, unit_level, is_leaf', 'safe', 'on'=>'search'),
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
			'unit_id' => 'Unit',
			'unit_name' => 'Unit Name',
			'parent_unitid' => 'Parent Unitid',
			'unit_level' => 'Unit Level',
			'is_leaf' => 'Is Leaf',
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

		$criteria->compare('unit_id',$this->unit_id);
		$criteria->compare('unit_name',$this->unit_name,true);
		$criteria->compare('parent_unitid',$this->parent_unitid);
		$criteria->compare('unit_level',$this->unit_level);
		$criteria->compare('is_leaf',$this->is_leaf);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/** get unit child
	 */
	public static  function getUnit($parent_id=null)
	{
		$unitList= array();
		if(is_null($parent_id)){
			$units = UnitConf::model()->findAllByAttributes(array('parent_unitid'=>null),array('order'=>'unit_id asc'));
		}else{
			$units = UnitConf::model()->findAllByAttributes(array('parent_unitid'=>$parent_id),array('order'=>'unit_id asc'));
		}
		
		foreach ($units as $unit){
				array_push($unitList,
					array('id'=>$unit['unit_id'],
						  'name'=>$unit['unit_name'],
						  'parent_id'=>$unit['parent_unitid'],
						  'level'=>$unit['unit_level'],
						  'is_leaf'=>$unit['is_leaf']));			
		}
		
		return $unitList;
	}
}