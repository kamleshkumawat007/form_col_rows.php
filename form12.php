<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form12</title>
    <style>
    table{
        border:2px solid black;
        background-color: #948c9c;
    }
    </style>
</head>
<body>
    <table border>
<?php
for ($m=1; $m<=$_GET['rows'] ; $m++)


{
    ?> 
    <tr>
        <?php
        $rom_number=$_GET['col'];
       for ($i=1; $i <=$rom_number ; $i++) {
            ?> 
            <td <?php if($m%3==0&&$i%3==0){
                ?>
                style="color:red"
                <?php
            }?> <?php if($m%4==0&&$i%5==0){
                ?>
                style="background-color:red;"
                <?php
            }?> >
            <?php 
            if(($m-$i==9||$i-$m==9)){
                ?> 
               <iframe width="60" height="45" src="https://www.youtube.com/embed/4KkEXgOfhfo?si=zetX8AmmvvMOIbcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
            }
            ?>
            <?php if (($m-$i==9||$i-$m==9)||($m%2==0&&$i**2<=40)) {
                ?>
                <?php
            }
            ?>
            
             row <?php
         echo $m;
            ?>  col<?php
            echo $i;

            ?> </td>
            
            <?php
      }
      ?>
      </tr>
      <?php
}
?>

    </table>
</body>
</html>