
<?php
$password = readline("Inserisci la tua password; \n");

function checkLenght($string) {
    if (strlen($string) >= 8) {
        return true;
    }

    echo "La tua password deve contenere almeno 8 caratteri\n";
    return false;
}

$firstrule = checkLenght($password);

var_dump($firstrule);


function checkUppercase($string){
    for($i=0; $i<strlen($string); $i++){
        if(ctype_upper($string[$i])){
            return true;
        }
    }
    echo "Manca una lettera maiuscola \n";
    return false;
}

$secondrule = checkUppercase($password);
var_dump($secondrule);


function checkNumber($string) {
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            return true;
        }
    }

    echo "La password deve contenere almeno un carattere numerico\n";
    return false;
}

$thirdrule = checkNumber($password);

var_dump($thirdrule);


function checkSpecial($string) {
    $special_chars = ["!", "@", "?", "$"];

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $special_chars)) {
            return true;
        }
    }

    echo "La password deve contenere almeno un carattere speciale\n";
    return false;
}

$fourthrule = checkSpecial($password);

var_dump($fourthrule);


function checkPassword($string) {
    $firstrule = checkLenght($string);
    $secondrule = checkUppercase($string);
    $thirdrule = checkNumber($string);
    $fourthrule = checkSpecial($string);

    if ($firstrule && $secondrule && $thirdrule && $fourthrule) {
        echo "Password accettata!\n";
    }

    return $firstrule && $secondrule && $thirdrule && $fourthrule;
}

$password = readline("Scrivi la tua password: ");

var_dump(checkPassword($password));

do {
    $password = readline("Scrivi la tua password \n");

}

while (!checkPassword($password));



