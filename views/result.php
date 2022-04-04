<!DOCTYPE html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Occurrences</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $cont = 0;
                    foreach ($viewVars['output'] as $name => $line) {
                        if ($cont %2 == 0) {
                            $cor = "style='background-color: #88FF88' ";
                        } else {
                            $cor = "style='background-color: #FFFFFF' ";
                        }
                        echo "<tr $cor>";
                            echo "<td>" . $name . "</td>";
                            echo "<td align='center'>" . $line . "</td>";                            
                        echo "</tr>";
                        $cont++;
                    }
                ?>
            </tbody>
        </table>
        <br />
        <img src="image-commiters.php" />
        <br />
        <input type="button" id="voltar" value="Voltar" />
        <script>
            function listenerClick() {
                document.location.href = "index.php";
            }
            document.getElementById("voltar").addEventListener("click", listenerClick);
        </script>
    </body>
</html>