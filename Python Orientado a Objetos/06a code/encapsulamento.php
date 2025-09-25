<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php
        class ControleRemoto implements Controlador {
            private $volume;
            private $ligado;
            private $tocando;

            public function __construct() {
                $this->volume = 50;
                $this->ligado = false;
                $this->tocando = false;
            }

            public function setVolume($volume) {
                $this->volume = $volume;
            }

            public function isLigado() {
                return $this->ligado;
            }

            public function setLigado($ligado) {
                $this->ligado = $ligado;
            }

            public function isTocando() {
                return $this->tocando;
            }

            public function setTocando($tocando) {
                $this->tocando = $tocando;
            }

            public function ligar() {
                $this->setLigado(true);
            }

            public function desligar() {
                $this->setLigado(false);
            }

            // Métodos abstratos
            public function abrirMenu() {
                echo "<p>----- MENU -----</p>";
                echo "<br>Está ligado? " . ($this->isLigado() ? "Sim" : "Não");
                echo "<br>Está tocando? " . ($this->isTocando() ? "Sim" : "Não");
                echo "<br>Volume: " . $this->volume;
                for ($i = 0; $i <= $this->volume; $i += 10) {
                    echo "|";
                }
                echo "<br>";
            }

            public function fecharMenu() {
                echo "<p>Fechando menu...</p>";
            }

            public function maisVolume() {
                if ($this->isLigado()) {
                    $this->setVolume($this->volume + 5);
                }
            }

            public function menosVolume() {
                if ($this->isLigado()) {
                    $this->setVolume($this->volume - 5);
                }
            }

            public function ligarMudo() {
                if ($this->isLigado() && $this->volume > 0) {
                    $this->setVolume(0);
                }
            }

            public function desligarMudo() {
                if ($this->isLigado() && $this->volume == 0) {
                    $this->setVolume(50);
                }
            }

            public function play() {
                if ($this->isLigado() && !$this->isTocando()) {
                    $this->setTocando(true);
                }
            }

            public function pause() {
                if ($this->isLigado() && $this->isTocando()) {
                    $this->setTocando(false);
                }
            }
                
        }

    interface Controlador {
        public function ligar();
        public function desligar();
        public function abrirMenu();
        public function fecharMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();
    }

    $controle = new ControleRemoto();
    $controle->ligar();
    $controle->setVolume(65);
    $controle->abrirMenu();
    ?>
</body>
</html>