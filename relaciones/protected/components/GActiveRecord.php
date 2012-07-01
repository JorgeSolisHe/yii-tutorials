<?php
class GActiveRecord extends CActiveRecord
{
	public static $db1;
	
	
    public function behaviors()
	{
		return array(
			'GCamposBehavior' => array(
				'class' => 'ext.campos.GCamposBehavior',
				'campoFechaCreacion' => 'creado',
				'campoFechaActualizacion' => 'actualizado',
				'campoUsuarioCC' => 'usuario',
				'campoIp' => 'ip',
				),
		);
	}
	
    protected static function getDatos1DbConnection()
    {
        if (self::$db1 !== null)
            return self::$db1;
        else
        {
            self::$db1 = Yii::app()->db1;
            if (self::$db1 instanceof CDbConnection)
            {
                self::$db1->setActive(true);
                return self::$db1;
            }
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db1" CDbConnection application component.'));
       }
    }

}