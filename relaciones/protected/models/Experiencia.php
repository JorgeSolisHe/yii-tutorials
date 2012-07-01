<?php

/**
 * This is the model class for table "experiencia".
 *
 * The followings are the available columns in table 'experiencia':
 * @property string $id
 * @property string $usuarios_id
 * @property string $empresa
 * @property string $inicio
 * @property string $finalizacion
 * @property string $jefe
 */
class Experiencia extends GActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experiencia the static model class
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
		return 'experiencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_id', 'required'),
			array('usuarios_id', 'length', 'max'=>100),
			array('empresa', 'length', 'max'=>200),
			array('jefe', 'length', 'max'=>255),
			array('inicio, finalizacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuarios_id, empresa, inicio, finalizacion, jefe', 'safe', 'on'=>'search'),
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
		'usuarios'=>array(self::BELONGS_TO,'Usuarios','usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuarios_id' => 'Usuarios',
			'empresa' => 'Empresa',
			'inicio' => 'Inicio',
			'finalizacion' => 'Finalizacion',
			'jefe' => 'Jefe',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('usuarios_id',$this->usuarios_id,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('finalizacion',$this->finalizacion,true);
		$criteria->compare('jefe',$this->jefe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}