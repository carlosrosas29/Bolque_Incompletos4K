<?php
   session_start();
     if (isset($_POST['Usuario']) && isset($_POST['pass'])&&isset($_POST['roll'])) 
      {
        $roll=$_POST['roll'];
       $username = $_POST['Usuario'];
       $password = $_POST['pass'];
       $conexion=new mysqli("localhost","root","","usuarios");
       if($roll==1) 
       {// login para usuarios
            $statement = "SELECT * FROM user WHERE correo= '$username'";
            $result = $conexion->query($statement);
            if ($result->num_rows > 0) 
            {
              $row = $result->fetch_array(MYSQLI_ASSOC); 
                  if (($password) == $row['password'])
                    {
                        $_SESSION['logged'] = true;
                        $_SESSION['Usuario'] = $username;
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
                          echo '<script lenguage="javascript"> alert("Bienvenido");';
                          echo "window.location='Registro.html';";
                          echo "</script>";
                    }
                    else if (($password) != $row['password'])
                    {
                        $_SESSION['logged'] = false;
                        $_SESSION['Usuario'] = $username;
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
                         echo '<script lenguage="javascript"> alert("Credenciales incorrectas");';
                         echo "window.location='Login.html';";
                         echo "</script>";
                    }
              }
                else
                    {
                      echo"Credenciales Incorrectas"; 
                      echo "<a href='Login.html'>Regresar</a>";
                    } 
          }
          if($roll==2) 
       {// login para Evaluadores
          if ($conexion->connect_error) 
          {
            die("Conexion failure: " . $conexion->connect_error);
          }
            $statement = "SELECT * FROM evaluadores WHERE Correo= '$username'";
            $result = $conexion->query($statement);
            if ($result->num_rows > 0) 
            {
              $row = $result->fetch_array(MYSQLI_ASSOC); 
                  if (($password) === $row['Nombre'])
                    {
                        $_SESSION['logged'] = true;
                        $_SESSION['Usuario'] = $username;
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
                      if($roll==2)
                        {
                          echo '<script lenguage="javascript"> alert("Bienvenido");';
                          echo "window.location='Evaluadores.php';";
                          echo "</script>";
                        }
                    }
                  else if (($password) != $row['Nombre'])
                    {
                        $_SESSION['logged'] = false;
                        $_SESSION['Usuario'] = $username;
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
                         echo '<script lenguage="javascript"> alert("Credenciales incorrectas");';
                         echo "window.location='Login.html';";
                         echo "</script>";
                    }                
            }
            else
               {
                  echo"Credenciales Incorrectas"; 
                  echo "<a href='Login.html'>Regresar</a>";
               }
              
          }
        mysqli_close($conexion);
  }
?>


