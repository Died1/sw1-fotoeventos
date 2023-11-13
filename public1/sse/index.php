<!DOCTYPE html>
<html>
<head>
    <title>SSE Test</title>
</head>
<body>
    <h1>SSE Test</h1>
    <div id="sse-data"></div>

    <script>
        const sse = new EventSource('sse_listen.php');

        sse.addEventListener('hora', e => {
            console.log(e)
            document.getElementById('sse-data').innerText = e.data;
        });

    </script>
</body>
</html>
