<?php
    $pdf = new FPDF();
    $pdf->AddPage();

    //Cabecera
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,8,utf8_decode(''),'LTR');
    $pdf->Cell(90,8,utf8_decode('REGISTRO'),'LTR','','C');
    $pdf->Cell(50,8,utf8_decode('Código: SOP-FOR.009'),'LTRB');
    $pdf->ln();
    $pdf->Cell(50,8,utf8_decode('SISFO.EXE'),'LR','','C');
    $pdf->Cell(90,8,utf8_decode('CONTROL DE CAMBIOS'),'LR','','C');
    $pdf->Cell(50,8,utf8_decode('Fecha: 03/04/2017'),'LTRB');
    $pdf->ln();
    $pdf->Cell(50,8,utf8_decode(''),'LRB');
    $pdf->Cell(90,8,utf8_decode('EN LOS REQUERIMIENTOS'),'LRB','','C');
    $pdf->Cell(50,8,utf8_decode('Version: 02'),'LTRB');
    $pdf->ln();
    $pdf->Ln();

    //Proyecto
    $pdf->Cell(50,8,utf8_decode('Proyecto/Producto/Modulo:'),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->Cell(90,8,utf8_decode($changeControls['ChangeControl']['product']),'');
    $pdf->ln();
    //Cambio solicitado por y fecha
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(80,8,utf8_decode('Fecha: '),'');
    $pdf->Cell(110,8,utf8_decode('1- Cambio solicito por: '),'');
    $pdf->ln();
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(80,8,utf8_decode($changeControls['ChangeControl']['date']),'');
    $pdf->Cell(110,8,utf8_decode($users[$changeControls['ChangeControl']['user_id']]),'');
    $pdf->ln();
    //Proceso asociado al cambio //Motivo del cambio
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100,8,utf8_decode('2- Procesado asociado al cambio: '),'');
    $pdf->Cell(90,8,utf8_decode('3- Motivo del cambio: '),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->Cell(100,8,utf8_decode($changeControls['ChangeControl']['process']),'');
    $pdf->Cell(180,8,utf8_decode($reasons[$changeControls['ChangeControl']['reason']]),'');
    $pdf->ln();
    //Descripción
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('4- Descripción: '),'');
    $pdf->ln();
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->Cell(190,8,utf8_decode('Funcionalidad'),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,8,utf8_decode(''),'');
    $pdf->MultiCell(170,8,utf8_decode($changeControls['ChangeControl']['functionality']),'');
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('Descripción del cambio:'),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,8,utf8_decode(''),'');
    $pdf->MultiCell(170,8,utf8_decode($changeControls['ChangeControl']['description']),'');
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('Criterios de aceptación a tener en cuenta:'),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,8,utf8_decode(''),'');
    $pdf->MultiCell(170,8,utf8_decode($changeControls['ChangeControl']['accept']),'');
    //Adjuntos
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('5- ¿Adjuntos?: '),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->Cell(190,8,utf8_decode($answers[$changeControls['ChangeControl']['adjunt']]),'');
    $pdf->ln();
    //Descripciones de afectación al proyecto
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('6- Descripción de afectación al proyecto: '),'');
    
    $pdf->ln();
    $pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('6.1. ¿Afecta el alcance del proyecto?:'),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,8,utf8_decode(''),'');
    $pdf->MultiCell(170,8,utf8_decode($answers[$changeControls['ChangeControl']['scope']]),'');
    $pdf->Cell(30,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(160,8,utf8_decode('Descripción: '),'');
    $pdf->Cell(30,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(160,8,utf8_decode($changeControls['ChangeControl']['scope_description']),'');
    $pdf->Cell(10,8,utf8_decode(''),'');
    //$pdf->ln();
    //$pdf->Cell(10,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,8,utf8_decode('6.2. ¿Afecta el cronograma del proyecto?:'),'');
    $pdf->ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,8,utf8_decode(''),'');
    $pdf->MultiCell(170,8,utf8_decode($answers[$changeControls['ChangeControl']['scope']]),'');
    $pdf->Cell(30,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(160,8,utf8_decode('Descripción: '),'');
    $pdf->Cell(30,8,utf8_decode(''),'');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(160,8,utf8_decode($changeControls['ChangeControl']['scope_description']),'');
    $pdf->Cell(10,8,utf8_decode(''),'');


    $pdf->Output('','Control_De_Cambios');
?>