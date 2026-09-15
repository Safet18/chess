<?php

$figures = [
    "rook.png",
    "horse.png",
    "elephant.png",
    "queen.png",
    "king.png",
    "pawn.png"
];


function create_cells($is_black){
    echo "<tr>";
    for ( $i = 0; $i < 8; $i++ ){
        $bg_color = $is_black ? '#d3d3d3' : '#ffffff';
        $style_cell = "width: 400px; height: 400px; text-align: center; background-color: {$bg_color};";
        echo "<td style='{$style_cell}'></td>";
        $is_black = !$is_black;
    }
    echo "</tr>";
}
function first_row($figures, $reverse, $is_black){
    echo "<tr>";
    
    if ( $reverse == false ){
        for ( $i = 0; $i < 8; $i++ ){
            $bg_color = $is_black ? '#d3d3d3' : '#ffffff';
            $style_cell = "width: 400px; height: 400px; text-align: center; background-color: {$bg_color};";
            if ( $i > 4){
                echo "  <td style='{$style_cell}'>
                            <img src='{$figures[8 - $i - 1]}'>
                        </td>";
                $is_black = !$is_black;
                continue;
            }
            if ( $i == 4 ){
                echo "  <td style='{$style_cell}'>
                            <img src='{$figures[$i]}'>
                        </td>";
                $is_black = !$is_black;
                continue;
            }
            if ( $i == 5 ){
                echo "  <td style='{$style_cell}'>
                            <img src='{$figures[$i]}'>
                        </td>";
                $is_black = !$is_black;
                continue;
            }
            echo "  <td style='{$style_cell}'>
                        <img src='{$figures[$i]}'>
                    </td>";
            $is_black = !$is_black;
        }
    }
    else if ( $reverse == true ){
        $is_black = true;
        for ( $i = 7; $i >= 0; $i-- ){
            $bg_color = $is_black ? '#d3d3d3' : '#ffffff';
            $style_cell = "width: 400px; height: 400px; text-align: center; background-color: {$bg_color};";
            if ( $i > 4){
                echo "  <td style='{$style_cell}'>
                            <img src='{$figures[8 - $i - 1]}'>
                        </td>";
                $is_black = !$is_black;
                continue;
            }
            if ( $i == 5 ){
                echo "  <td style='{$style_cell}'>
                            <img src='{$figures[$i]}'>
                        </td>";
                $is_black = !$is_black;
                continue;
            }
            else if ( $i == 4 ){
                echo "  <td style='{$style_cell}'>
                            <img src='{$figures[$i]}'>
                        </td>";
                $is_black = !$is_black;
                continue;
            }
            echo "  <td style='{$style_cell}'>
                        <img src='{$figures[$i]}'>
                    </td>";
            $is_black = !$is_black;
        }
    }
    echo "</tr>";
}

echo "<table border='1' style='border-collapse: collapse; text-align: center'";
first_row($figures, false, false);

$is_black = false;
echo "<tr>";
for ($p = 0; $p < 8; $p++ ){
    $is_black = !$is_black;
    $bg_color = $is_black ? '#d3d3d3' : '#ffffff';
    $style_cell = "width: 400px; height: 400px; text-align: center; background-color: {$bg_color};";      
    echo "<td style='$style_cell'><img src='{$figures[5]}'></td>";
}
echo "</tr>";
$is_black = false;
create_cells(false);
create_cells(true);
create_cells(false);
create_cells(true);
echo "<tr>";
for ($p = 0; $p < 8; $p++ ){
    $bg_color = $is_black ? '#d3d3d3' : '#ffffff';
    $style_cell = "width: 400px; height: 400px; text-align: center; background-color: {$bg_color};";      
    echo "<td style='$style_cell'><img src='{$figures[5]}'></td>";
    $is_black = !$is_black;
}
echo "</tr>";
first_row($figures, true, true);
echo "</table>";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Шахматная доска</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
        <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">
        <meta name="robots" content="<?php echo $pageRobots; ?>">
    </head>
    <body></body>

</html>