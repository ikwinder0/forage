<?php 
error_reporting(-1);

echo $script = __DIR__."/QRCodeScriptWhite.js"; 
        
echo exec('./node ' .$script );
