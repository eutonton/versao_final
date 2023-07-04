<?php 

include_once "../conexao_pdo.php";

$sql = "SELECT * FROM empresas";

try {
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <div id="menu-btn" class="fas fa-bars-staggered"></div>

      <a href="home2.php" class="logo"><i class="fas fa-briefcase"></i> Emprego sem fronteiras</a>

      <nav class="navbar">
         <a href="home2.php">home</a>
         <a href="jobs.php">Vagas</a>
         <a href="equipe.php">Nossa equipe</a>
      </nav>

      <a href="./cdempresa.html" class="btn" style="margin-top: 0;">Publique uma Vaga</a>

      <a href="../home_gerente.php" class="btn" style="margin-top: 0; margin-right:5px">Relatorios</a>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home-container">

   <section class="home">

      :

   </section>

</div>

<!-- home section ends -->

<!-- category section starts  -->



<!-- category section ends -->

<!-- jobs section starts  -->

<section class="jobs-container">
    <h1 class="heading">Vagas</h1>

    <div class="box-container">

        <?php
        foreach ($resultados as $row) {
            echo '<div class="box">';
            echo '<div class="company">';
            echo '<img src="./images/maleta.png.png" alt="">';
            echo '<div>';
            echo '<h3>' . $row['nome'] . '</h3>';
            echo '<p>2 days ago</p>';
            echo '</div>';
            echo '</div>';
            echo '<h3 class="job-title">' . $row['funcao'] . '</h3>';
            echo '<p class="location"><i class="fas fa-map-marker-alt"></i> <span>' . $row['endereco'] . '</span></p>';
            echo '<div class="tags">';
            echo '<p><i class="fa-solid fa-brazilian-real-sign"></i> <span>' . $row['faixa_salario'] . '</span></p>';
            echo '<p><i class="fas fa-briefcase"></i> <span>' . $row['carga'] . '</span></p>';
            // echo '<p><i class="fas fa-clock"></i> <span>day shift</span></p>';
            echo '</div>';
            echo '<div class="flex-btn">';
            echo '<a href="../front_cadidatura copy.php" class="btn">Canditar-se</a>
            ';
            echo '<button type="submit" class="far fa-heart" name="save"></button>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<!-- jobs section ends -->










<!-- footer section starts  -->

<footer class="footer">

   <div class="credit">&copy; copyright @ 2023 by <span>Team Emprego sem Fronteiras</span> | Todos os direitos reservados!</div>

</footer>

<!-- footer section ends -->



<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>