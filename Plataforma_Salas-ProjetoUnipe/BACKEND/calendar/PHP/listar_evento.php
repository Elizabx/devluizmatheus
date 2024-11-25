<?php
    include_once '../PHP/conexao.php';

    $query_events = "SELECT id, title, color, start, end FROM events";

    $result_events = $conn->prepare($query_events);

    $result_events->execute();

    while($row_events = $result_events ->fetch(PDO::FETCH_ASSOC)) {
        
        //Extrair Array
        extract($row_events);

        $eventos[] = [
            'id' => $id,
            'title' => $title,
            'color' => $color,
            'start' => $start,
            'end' => $end,
        ];
    }
echo json_encode($eventos);
?>