<html>

<head>
  <link rel="stylesheet" href="styles/main.css"/>
  <title>Chart 1</title>
</head>

<body>
<?php
  require_once "PaymentReports.php";
  $report = new PaymentReports;
  $report->run()->render();
?>
</body>

</html>
