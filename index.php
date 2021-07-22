<?php
    if (! isset($_GET['error'])) {
        $viewVars['error'] = "";
    } else {
        $viewVars['error'] = $_GET['error'];
    }
    require("views/index.php");