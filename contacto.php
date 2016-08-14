<?
    $mailto = 'contacto@caboverde.cl'; // insert the email address you want the form sent to

    $returnpage = 'index.html'; // insert the name of the page/location you want the user to be returned to

    $sitename = '[Caboverde - Contacto]'; // insert the site name here, it will appear in the subject of your email



/* Do not edit below this line unless you know what you're doing */

        

  $nombre = $_POST['nombre'];

  $telefono = $_POST['telefono'];

  $email = $_POST['email'];
   
  $direccion = $_POST['direccion'];

  $mensaje = stripslashes($_POST['mensaje']);

        

  
  $message = "\n$nombre ha enviado el siguiente mensaje:\n\n$mensaje\n\nSus datos son:\n\nNombre: $nombre\nTelefono: $telefono\nCorreo: $email\nDireccion: $direccion\n\n" ;
  $message = "\n$nombre ha enviado el siguiente mensaje:\n\n$mensaje\n\nSus datos son:\n\nNombre: $nombre\nTelefono: $telefono\nCorreo: $email\nDireccion: $direccion\n\n" ;



  mail($mailto, "$sitename $name", $message, "From: $email");

  header("Location: " . $returnpage);



?>