<?php

/**
 * This is the model class for table "estudios".
 *
 * The followings are the available columns in table 'estudios':
 * @property string $id
 * @property string $usuarios_id
 * @property string $institucion
 * @property string $anio_graduacion
 * @property string $titulo
 */
class Estudios extends GActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estudios the static model class
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
		return 'estudios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_id, institucion, anio_graduacion, titulo', 'required'),
			array('usuarios_id', 'length', 'max'=>100),
			array('institucion, titulo', 'length', 'max'=>255),
			array('anio_graduacion', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuarios_id, institucion, anio_graduacion, titulo', 'safe', 'on'=>'search'),
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
			'usuarios_id' => 'Usuarios',
			'institucion' => 'Institucion',
			'anio_graduacion' => 'Anio Graduacion',
			'titulo' => 'Titulo',
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
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('anio_graduacion',$this->anio_graduacion,true);
		$criteria->compare('titulo',$this->titulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}