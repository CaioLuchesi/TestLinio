<?php

namespace Test\Classes {

    /**
     * Class Calculate
     * @package Test\Classes
     * Classe que calcula apartir de 0 até o valor dado todos os números múltiplos de três e cinco,
     * substituindo os múltiplos de três por "Linio", os múltiplos de cinco por "IT" e os de ambos por "Linianos"
     */
    class Calculate
    {
        private $numbers = array();

        /**
         * Calculate constructor.
         * @param $totalvalue
         * Construtor que alimenta o array com os números até o valor passado
         */
        function __construct($totalvalue)
        {
            for($i = 0; $i < $totalvalue; $i++) {
                $this->numbers[$i] = $i + 1;
            }
        }

        /**
         * Função que calcula os múltiplos de três
         */
        private function calculateNumbersMultiplesOfThree()
        {
            for($i = 2; $i < count($this->numbers); $i+= 3) {
                $this->numbers[$i] = "Linio";
            }
        }

        /**
         * Função que calcula os múltiplos de cinco
         */
        private function calculateNumbersMultiplesOfFive()
        {
            for($i = 4; $i < count($this->numbers); $i+= 5) {
                $this->numbers[$i] = "IT";
            }
        }

        /**
         * Função que calcula os múltiplos de três e cinco
         */
        private function calculateNumbersMultiplesOfThreeAndFive()
        {
            for($i = 15; $i < count($this->numbers); $i+= 15) {
                if ((($i) % 15) == 0) {
                    $this->numbers[$i-1] = "Linianos";
                }
            }
        }

        /**
         * @return array
         * Função que chama as outras funções de calculo de múltiplos e retorna um array com o valor final
         */
        function calculate()
        {
            $this->calculateNumbersMultiplesOfThree();
            $this->calculateNumbersMultiplesOfFive();
            $this->calculateNumbersMultiplesOfThreeAndFive();

            return $this->numbers;
        }
    }
}
