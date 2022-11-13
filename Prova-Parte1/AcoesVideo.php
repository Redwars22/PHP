<?php
    require_once "AcoesVideo.php";

    interface AcoesVideo {
        public function play();
        public function pause();
        public function like();
    }
?>