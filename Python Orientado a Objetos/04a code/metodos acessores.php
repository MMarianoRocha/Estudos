<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php
        class ControleRemoto {
            private $volume;
            private $ligado;
            private $tocando;
            public function __construct() {
                $this->volume = 50;
                $this->ligado = false;
                $this->tocando = false;
            }

            public function ligar() {
                $this->ligado = true;
                echo "Televisão ligada.";
            }
            public function desligar() {
                $this->ligado = false;
                echo "Televisão desligada.";
            }

            public function setVolume(int $volume) {
                return $this->volume = $volume;
            }

            public function getVolume(): int {
                return $this->volume;
            }

            public function isLigado(): bool {
                return $this->ligado;
            }

            public function isTocando(): bool {
                return $this->tocando;
            }
        }

        $controleRemoto = new ControleRemoto();
        $controleRemoto->setVolume(75);
        print_r($controleRemoto->getVolume());
    ?>
</body>
</html>