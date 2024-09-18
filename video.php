<?php

    class Video {
        protected string $url;

        public function getVideo() {
            if ($this->url == "") {
                return "Pas de lien";
            }
            return $this->url;
        }

        public function setVideo($url) {
            $this->url = $url;
        }
    }

?>