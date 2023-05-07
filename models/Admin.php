<?php

namespace Model;

class Admin extends ActiveRecord {
    // DB
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'email', 'password'];

    public $id;
    public $email;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function validar() {
        if(!$this->email){
            self::$errores[] = 'Email is mandatory';
        }
        if(!$this->password){
            self::$errores[] = 'Password is mandatory';
        }

        return self::$errores;
    }

    public function existeUsuario(){
        // Check if the user exists
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";

        $resultado = self::$db->query($query);

        if(!$resultado->num_rows){
            self::$errores[] = 'Invalid user';
            return;
        }

        return $resultado;
    }

    public function comprobarPassword($resultado){
        $usuario = $resultado->fetch_object();

        $autenticado = password_verify($this->password, $usuario->password);

        if(!$autenticado){
            self::$errores[] = 'Entered password is incorrect';
        }

        return $autenticado;
    }

    public function autenticar(){
        session_start();

        // Llenar el arreglo de sesión
        $_SESSION['usuario'] = $this->email;
        $_SESSION['login'] = true;

        header('Location: /admin');

    }

}

