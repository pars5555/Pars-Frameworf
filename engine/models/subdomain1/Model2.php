<?php

namespace models\subdomain1 {

    class Model2 extends \models\system\HtmlModel {

        public function init() {
            $this->addParam('model1', 'subdomain1 Model1');
        }

        public function getTemplatePath() {
            return VIEWS_DIR . "/main/view2.tpl";
        }

    }

}