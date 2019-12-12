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

  function getScheme(){
    $schemeArray = array("#D51C47", "#501DFF", "#FFBA00"); // add any colors here
    $chosenScheme = array_rand($schemeArray, 1);
    return array($schemeArray[$chosenScheme]);
  }

  \koolreport\chartjs\ColumnChart::create(array(
    "title"=>"Agents' points",
    "options"=>array(
      "plugins"=>array(
        "datalabels"=>array(
          "backgroundColor"=>"rgba(0, 0, 0, .5)",
          "color"=>"#FFFFFF",
          "borderWidth"=>"1",
          "borderRadius"=>"100",
          "anchor"=>"top",
          "padding"=>array(
            "left"=>"20",
            "right"=>"20",
            "top"=>"1",
            "bottom"=>"1"
          )
        )
      )
    ),
    "colorScheme"=>getScheme(),
    "dataSource"=>$this->dataStore('agent_points'),
    "columns"=>array(
      "ToT - Agent Contact: Full Name",
      "Agent Points"=>array(
        "label"=>"Points",
        "type"=>"number",
      )
    )
  ));
   ?>
<body>

</html>
