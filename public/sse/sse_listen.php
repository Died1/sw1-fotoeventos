<?php
header('Content-Type: text/event-stream');
echo "event: hora\n";
echo "data:" . date('H:i:s');
echo "\n\n";
