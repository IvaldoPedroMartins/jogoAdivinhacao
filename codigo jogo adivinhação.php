<?php
/*sorteio do numero secreto*/
$secreto= rand(1,30);
echo "o numero secreto é $secreto \n\n";

//tentativas
$tentativas=4;
while($tentativas>=0){
//sua escolha
$escolha=15;
if ($escolha==$secreto){
echo "você acertou.";
break;}

elseif($escolha<$secreto)
echo "você errou, tente novamente.\nDica: o seu valor esta abaixo do numero secreto.\n\n";
elseif($escolha>$secreto)
echo "você errou, tente novamente.\nDica: o seu valor esta a cima do numero secreto.\n\n";

echo "resta: $tentativas tentativas.";
$tentativas--;
break;
}
