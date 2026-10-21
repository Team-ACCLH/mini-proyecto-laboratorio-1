<?php
/**
 * ============================================================================
 *  DECORATOR: FIRMA DIGITAL
 * ============================================================================
 *
 *  Envuelve un Report y agrega "+ firma digital" al resultado.
 *  Consecuencia: si se combina con PdfReportDecorator, el orden importa.
 * ============================================================================
 */

require_once __DIR__ . '/Report.php';

final class DigitalSignatureDecorator implements Report
{
    public function __construct(private Report $report) {}

    public function generate(): string
    {
        return $this->report->generate() . ' + firma digital';
    }
}
