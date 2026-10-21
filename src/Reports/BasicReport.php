<?php
/**
 * ============================================================================
 *  REPORTE BASE
 * ============================================================================
 *
 *  Implementa Report con el comportamiento por defecto.
 *  Los decoradores envuelven esta clase para agregar funcionalidad.
 * ============================================================================
 */

require_once __DIR__ . '/Report.php';

final class BasicReport implements Report
{
    public function __construct(private string $contenido) {}

    public function generate(): string
    {
        return "Reporte: {$this->contenido}";
    }
}
