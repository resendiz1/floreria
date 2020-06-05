<?php
class enlacesPagina
{
    static public function enlaces_modelo($enlaces_model)
    {
        if ($enlaces_model == "inicio" || $enlaces_model == "add") {

            $modulo = "views/modules/" . $enlaces_model . ".php";
        } elseif ($enlaces_model == "success") {

            $modulo = "views/modules/inicio.php";
        } elseif ($enlaces_model == "success´nt_comm") {

            $modulo = "views/modules/inicio.php";
        } elseif ($enlaces_model == "error") {
            $modulo = "views/modules/inicio.php";
        } elseif ($enlaces_model == "add_success") {

            $modulo = "views/modules/add.php";
        } elseif ($enlaces_model == "add_successnt") {

            $modulo = "views/modules/add.php";
        } elseif ($enlaces_model == "no_imagen") {
            $modulo = "views/modules/add.php";
        } elseif ($enlaces_model == "sobre_peso") {
            $modulo = "views/modules/add.php";
        }
        elseif ($enlaces_model == "borrado") {
            $modulo = "views/modules/add.php";
        }
        elseif ($enlaces_model == "no_borrado") {
            $modulo = "views/modules/add.php";
        }
        elseif ($enlaces_model == "no_editado") {
            $modulo = "views/modules/add.php";
        }
        elseif ($enlaces_model == "editado") {
            $modulo = "views/modules/add.php";
        }
        //vacios y otros

        elseif ($enlaces_model == "") {

            $modulo = "views/modules/inicio.php";
        } else {
            $modulo = "views/modules/inicio.php";
        }



        return $modulo;
    }
}
