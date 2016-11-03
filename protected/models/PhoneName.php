<?php

/**
 * This is the model class for table "PhoneName".
 *
 * The followings are the available columns in table 'PhoneName':
 * @property integer $id
 * @property integer $parentid
 * @property integer $name
 * @property integer $cam
 * @property integer $frontcam
 * @property integer $proc
 * @property integer $q
 * @property integer $w
 * @property integer $e
 * @property integer $r
 * @property integer $t
 * @property integer $y
 * @property integer $u
 * @property integer $i
 * @property integer $g
 * @property integer $v
 * @property integer $x
 * @property integer $s
 * @property integer $k
 */
class PhoneName extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PhoneName';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parentid, name, cam, frontcam, proc, q, w, e, r, t, y, u, i, g, v, x, s, k', 'required'),
			array('parentid, name, cam, frontcam, proc, q, w, e, r, t, y, u, i, g, v, x, s, k', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, parentid, name, cam, frontcam, proc, q, w, e, r, t, y, u, i, g, v, x, s, k', 'safe', 'on'=>'search'),
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
			'parentid' => 'Parentid',
			'name' => 'Name',
			'cam' => 'Cam',
			'frontcam' => 'Frontcam',
			'proc' => 'Proc',
			'q' => 'Q',
			'w' => 'W',
			'e' => 'E',
			'r' => 'R',
			't' => 'T',
			'y' => 'Y',
			'u' => 'U',
			'i' => 'I',
			'g' => 'G',
			'v' => 'V',
			'x' => 'X',
			's' => 'S',
			'k' => 'K',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('parentid',$this->parentid);
		$criteria->compare('name',$this->name);
		$criteria->compare('cam',$this->cam);
		$criteria->compare('frontcam',$this->frontcam);
		$criteria->compare('proc',$this->proc);
		$criteria->compare('q',$this->q);
		$criteria->compare('w',$this->w);
		$criteria->compare('e',$this->e);
		$criteria->compare('r',$this->r);
		$criteria->compare('t',$this->t);
		$criteria->compare('y',$this->y);
		$criteria->compare('u',$this->u);
		$criteria->compare('i',$this->i);
		$criteria->compare('g',$this->g);
		$criteria->compare('v',$this->v);
		$criteria->compare('x',$this->x);
		$criteria->compare('s',$this->s);
		$criteria->compare('k',$this->k);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhoneName the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
