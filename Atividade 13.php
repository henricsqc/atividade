<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $hoje = "Quarta";
        switch ($hoje) {
            case 'Segunda':
                echo'Hoje é segunda-feira.';
                break;
            case 'Terça':
                echo'Hoje é terça-feira.';
                break;
            case 'Quarta':
                echo'Hoje é quarta-feira.';
                break;  
            default:
                echo'Não é início da semana';
        }
    ?>
</body>
</html>