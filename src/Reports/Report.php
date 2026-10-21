<?php
/**
 * ============================================================================
 *  CONTRATO DE REPORTES
 * ============================================================================
 *
 *  Interfaz comun para reportes y decoradores.
 *  Permite composicion: decoradores envuelven reportes.
 *
 *  Reemplaza al viejo ReportGenerator::generate($contenido, bool, bool, bool):
 *
 *    $reporte = new BasicReport('Pedido 1');
 *    $reporte = new DigitalSignatureDecorator($reporte);
 *    $reporte = new PdfReportDecorator($reporte);
 *    echo $reporte->generate();
 *
 *  Consecuencia: el orden de decoradores cambia el resultado.
 *  Firmar -> PDF no es lo mismo que PDF -> firmar.
 * ============================================================================
 */

interface Report
{
    public function generate(): string;
}
