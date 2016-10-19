<!DOCTYPE html>
<html>
  <head>
    <title>Student Clearance Report</title>
    <script src="assets/jquery-1.12.4.min.js"></script>
    <script src="assets/canvasjs.min.js"></script>
  </head>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "clearance_db";
        // Create connection
        $connetion = new mysqli($servername, $username, $password,$database);
        // Check connection
        if ($connetion->connect_error) {
            die("Connection failed: " . $connetion->connect_error);
        } 
        $sql = "SELECT COUNT(student_id)AS Number_Of_Students FROM clearance_form";
        $result = $connetion->query($sql);
        $data = array();
        while($row=$result->fetch_assoc())
        {
          $ns = $row['Number_Of_Students'];
          //$cs = $row['Clearance_Status'];           
        }

        $sql1 = "SELECT COUNT(status)AS not_submited FROM clearance_form WHERE status ='active'";
        $result1 = $connetion->query($sql1);
        $data1 = array();        
        while($row1=$result1->fetch_assoc())
        {
          //$ns = $row['Number_Of_Students'];
          $cs = $row1['not_submited'];           
        }
        $sql2 = "SELECT COUNT(status)AS submitted FROM clearance_form WHERE status ='librarian'";
        $result2 = $connetion->query($sql2);
        $data2 = array();        
        while($row2=$result2->fetch_assoc())
        {
          //$ns = $row['Number_Of_Students'];
          $cl = $row2['submitted'];           
        }
       
        $sql4 = "SELECT COUNT(status)AS Librarian_blocked FROM clearance_form WHERE status ='Librarian-blocked'";
        $result4 = $connetion->query($sql4);
        $data4 = array();        
        while($row4=$result4->fetch_assoc())
        {
          //$ns = $row['Number_Of_Students'];
          $lb = $row4['Librarian_blocked'];           
        }

        $sqllib="SELECT COUNT(status)AS Lib_cleared FROM clearance_form WHERE status ='deansch'";
        $libResult =$connetion->query($sqllib);
        $data5=array();
        while ($rowlib=$libResult->fetch_assoc()) {
           $lbcl = $rowlib['Lib_cleared'];
        }
        $dataPoints = array(            
              array('y' => $ns,"name"=>"Total Number of Students","exploded" =>true),
              array('y'=> $cs, "name"=>"Not Submited"),
              array('y'=> $cl,"name"=>"Submitted"),              
              array('y'=> $lb,"name"=>"Not Cleared by Librarian"),
              array('y'=> $lbcl,"name"=>"Cleared by Librarian")        
            );
        ?>      
    <body>
        <div id="chartContainer2"></div>
        <script type="text/javascript">
            $(function () {
                var chart = new CanvasJS.Chart("chartContainer2",
                {
                    theme: "theme2",
                    title:{
                        text: "Librarian Clearance Report"
                    },
                    exportFileName: "New Year Resolutions",
                    exportEnabled: true,
                    animationEnabled: true,   
                    data: [
                    {       
                        type: "column",
                        showInLegend: true,
                        toolTipContent: "{name}: <strong>{y}%</strong>",
                        indexLabel: "{name} {y}%",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
            });
        </script>
    </body>
 
</html>

