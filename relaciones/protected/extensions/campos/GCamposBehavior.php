<?php
class GCamposBehavior extends CActiveRecordBehavior {
	
	public $campoFechaCreacion = 'creado';
	public $campoFechaActualizacion = 'actualizado';
	public $campoUsuarioCC = 'usuario';
	public $campoIp = 'ip';

	public $setActualizacionAlCrear = true;

	public function beforeSave($event) {
            if ($this->getOwner()->getIsNewRecord()) {
                if($this->getOwner()->getTableSchema()->getColumn($this->campoFechaCreacion)!==null)    
                    $this->getOwner()->{$this->campoFechaCreacion} = date('Y-m-d H:i:s');
            }
            if ((!$this->getOwner()->getIsNewRecord() || $this->setActualizacionAlCrear) && ($this->getOwner()->getTableSchema()->getColumn($this->campoFechaActualizacion)!==null)) {
                    $this->getOwner()->{$this->campoFechaActualizacion} = date('Y-m-d H:i:s');
            }
            
            if (($this->getOwner()->getTableSchema()->getColumn($this->campoUsuarioCC)!==null)) 
                $this->getOwner()->{$this->campoUsuarioCC} = Yii::app()->user->name;
            
            if ($this->getOwner()->getTableSchema()->getColumn($this->campoIp)!==null) 
                $this->getOwner()->{$this->campoIp} = Yii::app()->request->userHostAddress;
	}

}