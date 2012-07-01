<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $id
 * @property string $ciudad_id
 * @property string $nombres
 * @property string $identificacion
 * @property string $email
 * @property integer $estado
 * @property string $genero
 */
class Usuarios extends GActiveRecord
{

	public $mi_campo;
	public $nombre;
	public $actualizar_estado;

	public static $generos=array(''=>'','H'=>'Hombre','M'=>'Mujer');
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('campo1, campo2, campo3', 'regla de validacion','on'=>'scenario','message'=>'escribo el mensaje de error {attribute} '),
			array('username, password', 'required'),
			
			array('ciudad_id, nombres, identificacion, email, genero', 'required','message'=>'Hermano esto : {attribute} debes ingresarlo .'),
			array('ciudad_id, nombres, identificacion, email, genero', 'required','on'=>'firme','message'=>'Hola esta es la validacion para {attribute} en el escenario firme'),
			array('nombres', 'required','on'=>'estupido','message'=>'Hola esta es la validacion para {attribute} en el escenario estupido'),
			#array('identificacion', 'numerical', 'integerOnly'=>true),
			array('estado', 'safe'),
			array('ciudad_id', 'length', 'max'=>100),
			array('identificacion', 'length', 'max'=>10,'min'=>7),
		    #array('identificacion','unique','attributeName'=>'empresa','className'=>'Experiencia','allowEmpty'=>false),
		    #array('identificacion','exist','attributeName'=>'identificacion','className'=>'Usuarios','allowEmpty'=>false),
		    #array('identificacion','compare','compareValue'=>'aaa','allowEmpty'=>false),
		    #array('identificacion','match','pattern'=>'Mi exprecion regular','allowEmpty'=>false),
			#array('identificacion', 'miValidacion'),
			array('email', 'length', 'max'=>255),
			array('email', 'email'),
			array('genero', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ciudad_id, nombres, identificacion, email, estado, genero', 'safe', 'on'=>'search'),
		);
	}

	public function miValidacion($attribute,$params)
	{
		if($this->genero=='H' && $this->identificacion == '123')
			$this->addError('identificacion','Eeeeepa el campo identificacion no puede ser 123 para los hombres.');
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		 'ciudad'=>array(self::BELONGS_TO,'Ciudad','ciudad_id'),
		 'experiencias'=>array(self::HAS_MANY,'Experiencia','usuarios_id'),
		 'folio'=>array(self::HAS_ONE,'Folio','usuarios_id'),
		 'experienciaCount'=>array(self::STAT,'Experiencia','usuarios_id'),
		 'vacante'=>array(self::MANY_MANY,'Vacantes','vacantes_usuarios(vacantes_id,usuarios_id)'),
		);
	}

	public static function getListCiudad()
	{
		return CHtml::listData(Ciudad::model()->findAll(),'id','nombre');
	}
	
	public static function getGenero($key=null)
	{
		if($key!==null)
			return self::$generos[$key];
		return self::$generos;	
	}
	
	public function nombre_estado()
	{
		return $this->estado==1?"Activo":"Inactivo";
	}
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ciudad_id' => 'Ciudad de Nacimiento',
			'nombres' => 'Nombres',
			'identificacion' => 'Identificacion',
			'email' => 'Email',
			'estado' => 'Estado',
			'genero' => 'Genero',
			'actualizar_estado' => 'Actualizar Estado',
		);
	}

	
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->session)===$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	public function generateSalt()
	{
		return uniqid('',true);
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
		$criteria->compare('ciudad_id',$this->ciudad_id,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('identificacion',$this->identificacion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('genero',$this->genero,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}