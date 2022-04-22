<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <!-- bootstrap 4 cdn -->
    <link rel="stylesheet" href="http://robin.adovasoft.com/cdn/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <!-- Table with list of users -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
    </div>

    <!-- jquery cdn -->
    <script src="http://robin.adovasoft.com/cdn/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap 4 cdn -->
    <script src="http://robin.adovasoft.com/cdn/bootstrap.min.js"></script>

    <script>
        window.setTimeout(function() {
            $.ajax({
                url: 'get_data.php',
                type: 'GET',
                success: function(data) {
                    $('.table tbody').html(data);
                }
            });
        }, 30000);
    </script>
</body>

</html>