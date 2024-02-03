<?php
// Definir datos de proyectos y presupuestos (simulados para este ejemplo)
$proyectos = [
    1 => ['nombre' => 'Proyecto A', 'presupuesto' => 50000],
    2 => ['nombre' => 'Proyecto B', 'presupuesto' => 75000],
    // Agrega más proyectos según sea necesario
];

// Obtener el ID del proyecto desde la consulta del cliente (simulado)
$projectId = isset($_GET['projectId']) ? intval($_GET['projectId']) : null;

// Verificar si se proporcionó un ID de proyecto válido
if ($projectId && isset($proyectos[$projectId])) {
    // Responder con la información de presupuesto para el proyecto específico
    $respuesta = [
        'id' => $projectId,
        'nombre' => $proyectos[$projectId]['nombre'],
        'presupuesto' => $proyectos[$projectId]['presupuesto']
    ];

    // Agregar el encabezado JSON
    header('Content-Type: application/json');

    // Imprimir la respuesta como JSON
    echo json_encode($respuesta);
} else {
    // Responder con un mensaje de error si no se proporcionó un ID de proyecto válido
    $respuesta = ['error' => 'ID de proyecto no válido'];
    header('Content-Type: application/json');
    echo json_encode($respuesta);
}
?>
