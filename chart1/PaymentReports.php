<?php
    require_once "../koolreport/core/src/KoolReport.php";
    require_once "../koolreport/core/autoload.php";

    use \koolreport\core\src\KoolReport;
    use \koolreport\core\src\processes\Filter;
    use \koolreport\processes\Group;
    use \koolreport\processes\Sort;
    use \koolreport\core\src\processes\Limit;
    use \koolreport\core\src\core\Utility;

    class PaymentReports extends \koolreport\KoolReport{
      public function settings(){
        return array(
          "dataSources"=>array(
            "AgentPaymentsReport"=>array(
              "class"=>'\koolreport\datasources\CSVDataSource',
              'filePath'=>dirname(__FILE__)."/../AgentPaymentsReport.csv",
            )
          )
        );
      }
      protected function setup(){
        $this->src('AgentPaymentsReport')
        ->pipe(new Group(array(
          //"by"=>"ToT - Agent Contact: Full Name",
          "by"=>"ToT - Agent Contact: Department",
          "sum"=>"Payment Amount"
        )))
        ->pipe($this->dataStore('agent_payments'));
      }
    }

?>
