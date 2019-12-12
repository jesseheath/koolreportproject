<html>
<?php
  //use \koolreport\widgets\koolphp\Table;
  //use \koolreport\widgets\google\PieChart;
  use \koolreport\widgets\google\DonutChart;
?>

<head>
  <link href="styles/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php

  function getScheme(){ // add any colors here
    $redScheme = array("#D51C47", "#D55B78", "#9C344C");
    $blueScheme = array("#9D81FF", "#501DFF", "#210095");
    $orangeScheme = array("#FFE6A4", "#FFD870", "#FFBA00");
    $schemeArray = array($redScheme, $blueScheme, $orangeScheme);
    $chosenScheme = array_rand($schemeArray, 1);
    return $schemeArray[$chosenScheme];
  }

  \koolreport\chartjs\DonutChart::create(array(
    "title"=>"Agents and Payments",
    "options"=>array(
      "plugins"=>array(
        "datalabels"=>array(
          "backgroundColor"=>"rgba(0, 0, 0, .5)",
          "color"=>"#FFFFFF",
          "borderRadius"=>"100",
          "padding"=>"10",
          "font"=>array(
            "size"=>"20"
          )
        )
      )
    ),
    "colorScheme"=>getScheme(),
    "dataSource"=>$this->dataStore('agent_payments'),
    "columns"=>array(
      "ToT - Agent Contact: Department",
      "Payment Amount"=>array(
        "label"=>"Payment",
        "type"=>"number",
        "prefix"=>"$",
      )
    )
  ));
   ?>
<body>

</html>
