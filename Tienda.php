<?php
class tienda {
    private $nombre;
    private $apellido;
    private $email;
    private $opciones;

    public function __construct($nombre,$apellido,$email,$opciones)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->opciones= $opciones;
    }
    }
    

     public function getNombre()
    {
        return $this->nombre;
    }

    public function getapellido()
    {
        return $this->apellido;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function getopciones()
    {
        return $this->opciones;
    }

    public function getselector($Robot1,$Robot2,$Robot3,$Robot4 )
    {
        return $this->opciones;
    }



};