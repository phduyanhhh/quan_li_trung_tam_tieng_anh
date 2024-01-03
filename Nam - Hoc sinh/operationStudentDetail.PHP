<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin học sinh</title>
    <link rel="stylesheet" href="../css/style-operationStudentDetails.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="detail-panel">
    <p class="panel-title">Thông tin Học sinh</p>
    <br></br>
    <a class="btn btn-success" style="margin-left: 500px" href="addStudentDetail.PHP">Thêm thông tin học sinh</a>
    <br></br>
    <h1 style="text-align: center">Tìm kiếm học sinh</h1>
        <form method="get">
        <input type="text" id="email" placeholder='Search' style="width: 40%; margin-left:350px">
        <br>
        </form>
    <div id='searchResults'></div>
    
</div>
<script>
            document.getElementById('email').addEventListener('input', function() {
            // Get the value entered by the user
            var inputValue = this.value;

            // Make an AJAX request to the server to get search results
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Update the searchResults div with the received data
                        document.querySelector('#searchResults').innerHTML = xhr.responseText;
                    } else {
                        console.error('Error fetching search results');
                    }
                }
            };

            // Send the AJAX request to the server with the entered value
            xhr.open('GET', 'show_ket_qua.php?ten=' + inputValue, true);
            xhr.send();
        });
    </script>
</body>
</html>