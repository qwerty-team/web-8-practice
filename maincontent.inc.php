<div class="about_me">
    <h1> <?php  echo $p ?> </h1>
    <div class="data">
        <div class="myImg">
            <?php  echo '<img src="img/cat2.jpg">'; ?>
        </div>
        <div class="fullname">
            <p> Меня зовут 
                <?php
                    echo $firstname, ' ', $lastname . '<br>';
                    echo 'город', ' ', $city;
                ?>
            </p>
            <p> Мне
                <?php echo $age; ?>
                лет
            </p>
            <p> Мы научились создавать переменные </p>
            <p> Изучили простые операции с ними </p>
            <p> и еще много разной фигни. </p>
        </div>
    </div>
</div>

<div class="knowledge">
    <?php include 'knowledge.inc.php'; ?>
    <?php echo $a, ' ', $b, ' ', $c; ?>
    <br>

    <?php
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo 'Уровень джуна = ' . $c;
    ?>
    <br>
    <?php echo $d; ?>
</div>

<div class="article">
    <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
        Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
    </p>
</div>