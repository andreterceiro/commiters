<!DOCTYPE html>
    <head>
        <title>Insertion of the log of Git</title>
        <style>
            #error {
                padding: 5px;
                margin-botton:10px;
                border: 1px solid #FF0000;
            }
            #title {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            if (! empty($viewVars['error'])) {
        ?>
                <div id="error">
                    <?php echo $viewVars['error']; ?>
                </div>
        <?php
            }
        ?>
        <div id="title">
            Put the content of "git log" (maybe the file "destiny.txt"), who can be obtained with a "git log > destiny.txt" command:
        </div>
        <div>
            <form method="POST" action="result.php" enctype="multipart/form-data">
                <div>
                    <span id="label">
                        File:
                    </span>
                    <span>
                        <input type="file" name="git-log" />
                    </span>
                </div>
                <div>
                    <span id="label">
                        String to consider each line (default is "Author"):
                    </span>
                    <span>
                        <input type="text" name="string-to-grep" value="Author" />
                    </span>                
                </div>
                <div>
                        <input type="submit" value="Send" />
                </div>
            </form>
        </div>

    </body>
</html>