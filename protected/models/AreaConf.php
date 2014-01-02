<?php

/**
 * This is the model class for table "{{conf_area}}".
 *
 * The followings are the available columns in table '{{conf_area}}':
 * @property integer $area_id
 * @property string $area_name
 * @property integer $area_region
 * @property integer $parent_areaid
 * @property integer $area_level
 * @property integer $is_leaf
 */
class AreaConf extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AreaConf the static model class
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
		return '{{conf_area}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_id, area_region, parent_areaid, area_level, is_leaf', 'numerical', 'integerOnly'=>true),
			array('area_name', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('area_id, area_name, area_region, parent_areaid, area_level, is_leaf', 'safe', 'on'=>'search'),
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
			'area_id' => 'Area',
			'area_name' => 'Area Name',
			'area_region' => 'Regionid',
			'parent_areaid' => 'Parent Areaid',
			'area_level' => 'Area Level',
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

		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('area_name',$this->area_name,true);
		$criteria->compare('area_region',$this->area_region);
		$criteria->compare('parent_areaid',$this->parent_areaid);
		$criteria->compare('area_level',$this->area_level);
		$criteria->compare('is_leaf',$this->is_leaf);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/** get area child
	 */
	public static  function getArea($parent_id=null)
	{
		$areaList= array();
		if(is_null($parent_id)){
			$areas = AreaConf::model()->findAllByAttributes(array('parent_areaid'=>null),array('order'=>'area_id asc'));
		}else{
			$areas = AreaConf::model()->findAllByAttributes(array('parent_areaid'=>$parent_id),array('order'=>'area_region asc'));
		}
		
		foreach ($areas as $area){
				array_push($areaList,
					array('id'=>$area['area_region'],
						  'name'=>$area['area_name'],
						  'parent_id'=>$area['parent_areaid'],
						  'level'=>$area['area_level'],
						  'is_leaf'=>$area['is_leaf']));			
		}
		
		return $areaList;
	}
}