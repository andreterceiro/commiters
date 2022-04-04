<?php
    // use andreterceiro\minigraficoimagem\MiniGraficoImagem;
    error_reporting(0);
	// require_once("vendor/autoload.php");
	require_once("./vendor/andreterceiro/minigraficoimagem/MiniGraficoImagem.php");

    $commiters = unserialize(file_get_contents('commiters.txt'));

	$grafico = new MiniGraficoImagem;
	$grafico->setarLinhaReferencia(5);

    foreach($commiters as $commiterName => $commitNumbers) {
        $cor = $grafico->gerarCor();
        $grafico->cadastrar(
            $commitNumbers,
            utf8_decode($commiterName),
            $cor[1],
            $cor[2],
            $cor[3]
        );
    }
	$grafico->gerarGrafico(255,255,200);