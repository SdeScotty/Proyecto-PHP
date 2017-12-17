<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formulario" method="post" action="">
            <table align="center" width="60%" heigth="100" border="2">
                <tr align="center">
                    <td bgcolor="blue" heigth="30">
                        <input type="text" name="var1" size="10" value="Número 1"/>
                    </td>
                    <td bgcolor="red">
                        <input type="text" name="var2" size="10" value="Numero 2" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviar" value="ENVIAR"/></td>
                </tr>
            </table>
        </form>
        <?php
            
            if (isset($_POST["enviar"])){
                $num1=$_POST["var1"];
                $num2=$_POST["var2"];
                echo "<center><h1>La suma de $num1 y $num2 es ".($num1+$num2). "</h1></center>";
            }
            
        ?>
    </body>
</html>
