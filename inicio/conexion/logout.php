<?php

@session_start();
session_destroy();  

header('Location: ../../index.php?sesion=1');  // redireccionamos a la página principal

  

?>