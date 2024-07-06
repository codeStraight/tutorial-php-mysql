<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>

</head>
<body>
    <button onclick="getProductsData()">Get Products</button>
    <br><br>
    <div id="productsData"></div>
    <script>
        function getProductsData() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById('productsData').innerHTML = xhr.responseText;
                    } else {
                        console.error('Request failed');
                    }
                }
            };
            xhr.open('GET', 'getProductsData-with-ajax.php', true);
            xhr.send();
        }
    </script>

</body>
</html>