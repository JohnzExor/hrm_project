<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Students</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
  <div style="display: flex; flex-direction:column; align-items:center; width:100%; padding-top:4em">
    <h3>Advanced Database Students</h3>

    <table id="example" class="table table-striped" style="width:100em">
      <thead>
        <tr>
          <th>ID</th>
          <th>Program</th>
          <th>Block</th>
          <th>Last Name</th>
          <th>First Name</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'db_conn.php'
        ?>
      </tbody>
    </table>

    <script>
      new DataTable('#example');
    </script>
  </div>
</body>

</html>