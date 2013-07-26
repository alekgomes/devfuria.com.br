<?php

/**
 * Arquivo index que funciona como redirecionador
 */
/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria correta
 */
define("PATTERN_EXEC", 4);
$materia = new Materia();
$materia->carregar(Materia::idXML_REGEXP, PATTERN_EXEC);
$materia->setNivel(Materia::BASICO);

/**
 * View
 */
require BASE_PATH . VIEWS_PATH . "materias.php";
?>