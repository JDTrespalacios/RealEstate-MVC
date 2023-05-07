<?php 

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router){

        $propiedades = Propiedad::get(3);
        $inicio = true;

        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }

    public static function nosotros(Router $router){
        $router->render('paginas/nosotros');
    }

    public static function propiedades(Router $router){

        $propiedades = Propiedad::all();
        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public static function propiedad(Router $router){
        $id = validarORedireccionar('/propiedades');

        // Buscar propiedad por su ID
        $propiedad = Propiedad::find($id);

        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }

    public static function blog(Router $router){
        $router->render('paginas/blog');
    }

    public static function entrada(Router $router){
        $router->render('paginas/entrada');
    }

    public static function contacto(Router $router){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $mensaje = null;

            $respuestas = $_POST['contacto'];

            // Crear una instancia de PHPMailer
            $mail = new PHPMailer();

            // Configurar SMTP (protocol)
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '36af81050fef3f';
            $mail->Password = '312345693a37c7';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            // Confgiurar contenido del email
            $mail->setFrom('admin@realestate.com');
            $mail->addAddress('admin@realestate.com', 'RealEstate.com');
            $mail->Subject = 'You have a new message';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            
            // Definir contenido
            $contenido = '<html>';
            $contenido .= '<p>You have a new message</p>';
            $contenido .= '<p>Name: ' . $respuestas['nombre'] . '</p>';

            // Enviar de forma condicional algunos campos de email o teléfono
            if($respuestas['contacto'] === 'telefono'){
                $contenido .= '<p>Prefered to be contacted by phone</p>';
                $contenido .= '<p>Phone: ' . $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Contact Date: ' . $respuestas['fecha'] . '</p>';
                $contenido .= '<p>Time: ' . $respuestas['hora'] . '</p>';
            } else {
                // Es email. Se agrega el campo de email
                $contenido .= '<p>Prefered to be contacted by email</p>';
                $contenido .= '<p>E-mail: ' . $respuestas['email'] . '</p>';
            }

            $contenido .= '<p>Message: ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>Buy/Sell: ' . $respuestas['tipo'] . '</p>';
            $contenido .= '<p>Price/Budget: $' . $respuestas['precio'] . '</p>';
            $contenido .= '<p>Prefers to be contacted by: ' . $respuestas['contacto'] . '</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'This is alternative text without HTML';

            // Enviar email
            if($mail->send()){
                $mensaje = 'Message sent successfully';
            } else {
                $mensaje =  'Failed to send message';
            }

        }

        $router->render('paginas/contacto', [
            'mensaje' => $mensaje
        ]);
    }
}