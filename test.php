<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing file</title>
</head>
<body>
    <title>welcome</title>
    <h1>Welcome to the test page</h1>
    <p>This is a simple test page to check the server response.</p>
    <p>Current date and time: <?php echo date('Y-m-d H:i:s'); ?></p>
    <p>Server IP address: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
    <p>Client IP address: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <p>Request method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
    <p>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></p>
    <p>Server software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    <p>PHP version: <?php echo phpversion(); ?></p>
    <p>Server name: <?php echo $_SERVER['SERVER_NAME']; ?></p>
    <p>Document root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
    <p>Script name: <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
    <p>Query string: <?php echo $_SERVER['QUERY_STRING']; ?></p>
    <p>HTTP headers:</p>
    <ul>
        <?php
        foreach (getallheaders() as $name => $value) {
            echo "<li>$name: $value</li>";
        }
        ?>
    
</body>
</html>