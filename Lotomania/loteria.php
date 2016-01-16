<?php
/*
Desenvolvedor: Vítor Martins Borges
LinkedIn: https://www.linkedin.com/profile/preview?locale=pt_BR&trk=prof-0-sb-preview-primary-button

*/
class Lotomania
{
    public static $limite = 50;
    public $listaNum = array();
    public $num;

    public function gerarNum()
    {
        do {

            $numero = $this->novo();
            $encontrou = false;

            foreach ($this->listaNum as $item)
            {
                if ($item === $numero)
                    $encontrou = true;
            }

            if (!$encontrou)
                $this->listaNum[count($this->listaNum)] = $numero;

        } while (count($this->listaNum) < self::$limite);
    }

    private function novo()
    {
        return rand(1, 100);
    }


    public function mostrarNum()
    {
        sort($this->listaNum);
        for($i = 0; $i < self::$limite; $i++)
            echo "<div class='num'>".$this->listaNum[$i]."</div>";
    }
}


$loto = new Lotomania();
$loto->gerarNum();
$loto->mostrarNum();

?>