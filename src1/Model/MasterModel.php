<?php
include("../../Lib/Config/conexionSqli.php");

class MasterModel extends Connection {
    
    
            
    public function consultar($sql)
    {             
        if(!isset($result)){$result='';}
        $resultado=mysqli_query($this->getConect(), $sql);  
        if ($this->conexion->connect_errno == 0)
        {            
            $result=array();
            while ($row=mysqli_fetch_array($resultado))
           {
               $result[]=$row;
            }
            return $result;
            
        }
        else
        {
         echo mysqli_error();
        }
        
        
        //return $result;                
    }
    
    public function consultarObjetos($sql)
    {
        if(!isset($result)){$result='';}
        $resultado=mysqli_object($this->getConect(), $sql);  
        if (mysql_errno()==0)
        {            
           
            return $resultado;
            
        }
        else
        {
         echo mysqli_error();
        }
        
    }
    
    function Insertar($sql)
    {        
        $result=mysqli_query($this->getConect(), $sql);
    }
    
    function Actualizar($sql)
    {        
        $respuesta= mysqli_query($this->getConect(),$sql);
        return $respuesta;
    }
	
    function Anular($sql){
            $respuesta= mysqli_query($this->getConect(),$sql);
            return $respuesta;
    }

    function autoIncrement($id,$tabla){
            $sql="select max($id) from $tabla";
            $resultado=mysqli_query($this->getConect(),$sql);
            $contador= mysqli_fetch_row($resultado);
            return end($contador) + 1;
    }
    
    
}
