<?php 
  $str = $argv[1];

  function stringToNumber($str){
    if(is_numeric($str)){ //Verifica de a variavel é um número
      return strpos ($str, '.') !== false ? (float)$str : (int)$str; //strpos verifica se após a variavel há 1 ponto, se for diferente de falso, ele irá assumir que a variável é um float, se não a variável é uma inteira
    }
    else{
      throw new Exception("Isso não é um número"); //throw new exception, fala para que pare todas as ações e exiba a imagem de que não é um número
    }
  }

  try {
    // Tentando converter a string para número
    $number = stringToNumber($str);
    echo "O número é: $number\n";
} catch (Exception $e) { //Pega a mensagem da exception, e a variável $e
    echo "Erro: " . $e->getMessage() . "\n"; // vincula a mensagem de erro da exception ao $e
}

?>