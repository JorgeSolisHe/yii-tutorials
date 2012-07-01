<?php
class GPuntos extends CActiveRecordBehavior
{
    public $campos;                 // String de campos separados por comas los cuales se les desea aplicar el formato
    public $separador = '.';        // Separador de miles
    
    public function beforeSave($event)
    {
        $campos = explode(',', $this->campos);
        foreach($campos as $campo){
            if(isset($this->getOwner()->{trim($campo)}))
                $this->getOwner()->{trim($campo)} = str_replace($this->separador, '', $this->getOwner()->{trim($campo)});
        }
    }

    public function afterFind($event)
    {
        $separador_dec = ($this->separador != '.')? '.' : ',';
        $campos = explode(',', $this->campos);
        foreach($campos as $campo)
            $this->getOwner()->{trim($campo)} = number_format($this->getOwner()->{trim($campo)},0,$separador_dec,$this->separador);
        
        return true;
    }
}