<html>
    <head>
        <title> Aula 05 - PHP </title>
    </head>
    <body>
        <?php
            $n1= 2;
            $num2=$_GET["x"];

            echo "Os valores são $n1 e $num2 <br><br>";
            echo "O valor absoluto de $n1 é " .abs($n1);
            echo "<br> O número $num2 <sup> $n1 </sup> é igual a " .pow($num2,$n1);
            echo "<br><br> A raiz quadrada de $num2 é igual a " .sqrt($n2);
            echo "<br>O número arredondado de $num2 é: " .round($num2);
            echo "<br> O $num2 arredondado pra cima fica " .ceil($num2);
            echo "<br> O $num2 arredondado pra baixo fica " .floor($num2);

            echo "<br><br><br>"
            echo "<br> A parte inteira de $num2 é igual a "  .intval($num2);
            echo "<br> Um pirulito custa R$" .number_format($n1, 2, ",", ".");
        ?>   
    </body>
</html>
