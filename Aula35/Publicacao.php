<?php
    interface Publicacao {
        public abrir();
        public folhear($pagina);
        public fechar();
        public avancarPagina();
        public voltarPagina();
    }