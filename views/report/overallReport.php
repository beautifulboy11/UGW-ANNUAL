<!DOCTYPE HTML>
<html>
<head>
  <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "clearance_db";
        $connetion = new mysqli($servername, $username, $password,$database);       
        if ($connetion->connect_error) {
            die("Connection failed: " . $connetion->connect_error);
        } 
        $sql = "SELECT COUNT(student_id)AS Number_Of_Students FROM clearance_form";
        $result = $connetion->query($sql);
        $data = array();
        while($row=$result->fetch_assoc())
        {
          $ns = $row['Number_Of_Students'];                  
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
          $cl = $row2['submitted'];           
        }
       
        $sql4 = "SELECT COUNT(status)AS Librarian_blocked FROM clearance_form WHERE status ='Librarian-blocked'";
        $result4 = $connetion->query($sql4);
        $data4 = array();        
        while($row4=$result4->fetch_assoc())
        {         
          $lb = $row4['Librarian_blocked'];           
        }

        $sqllib="SELECT COUNT(status)AS Lib_cleared FROM clearance_form WHERE status ='deansch'";
        $libResult =$connetion->query($sqllib);
        $data5=array();
        while ($rowlib=$libResult->fetch_assoc()) {
           $lbcl = $rowlib['Lib_cleared'];
        }
        $sqldean = "SELECT COUNT(status)AS dean_cleared FROM clearance_form WHERE status ='finance'";
        $result =$connetion->query($sqldean);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $deansh = $row['dean_cleared'];
        }
        $deanbl = "SELECT COUNT(status)AS dean_dcl FROM clearance_form WHERE status ='DeanOfSchool-blocked'";
        $result =$connetion->query($deanbl);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $deancl = $row['dean_dcl'];
        }
        $sqlFinance = "SELECT COUNT(status)AS finCl FROM clearance_form WHERE status ='academicaffairs'";
        $result =$connetion->query($sqlFinance);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $finance = $row['finCl'];
        }
        $sqlFin = "SELECT COUNT(status)AS findcl FROM clearance_form WHERE status ='Finance-blocked'";
        $result =$connetion->query($sqlFin);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $financedcl = $row['findcl'];
        }
        $sqlacad = "SELECT COUNT(status)AS acadCl FROM clearance_form WHERE status ='dosa'";
        $result =$connetion->query($sqlacad);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $academicCl = $row['acadCl'];
        }
        $sqlacadcl = "SELECT COUNT(status)AS acaddcl FROM clearance_form WHERE status ='AcademicAffairs-blocked'";
        $result =$connetion->query($sqlacadcl);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $academicDcl = $row['acaddcl'];
        }
        $sqldosa = "SELECT COUNT(status)AS dosacl FROM clearance_form WHERE status ='Cleared'";
        $result =$connetion->query($sqldosa);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $Dosacl = $row['dosacl'];
        }
        $sqldosadcl = "SELECT COUNT(status)AS dosadcl FROM clearance_form WHERE status ='DOSA-blocked'";
        $result =$connetion->query($sqldosadcl);
        $data =array();
        while ($row=$result->fetch_assoc()) {
           $Dosadcl = $row['dosadcl'];
        }



        $dataPoints = array(            
              array('y' => $ns,"name"=>"Total Number of Students","exploded" =>true),
              array('y'=> $cs, "name"=>"Not Submited"),
              array('y'=> $cl,"name"=>"Submitted"),

              array('y'=> $lb,"name"=>"Not Cleared by Librarian"),
              array('y'=> $lbcl,"name"=>"Cleared by Librarian"),

              array('y'=> $deansh,"name"=>"Cleared by Dean of School"),
              array('y'=> $deancl,"name"=>"Not Cleared by Dean of School"),

              array('y'=> $finance,"name"=>"Cleared by Finance Department"),
              array('y'=> $financedcl,"name"=>"Not Cleared by Finance Department"),

              array('y'=> $academicCl,"name"=>"Academic Affairs Cleared"),
              array('y'=> $academicDcl,"name"=>"Not Cleared by Academic Affairs"),

              array('y'=> $Dosacl,"name"=>"Dean of Student Affairs Cleared"),
              array('y'=> $Dosadcl,"name"=>"Not Cleared by Dean Student Affairs")
            );
    ?>
 <script type="text/javascript">

window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer", {
    title:{
      text: "Overall Clearance Report"              
    },
    data: [              
    {
      // Change type to "doughnut", "line", "splineArea", etc.
      type: "column",      
      dataPoints: [
        { label: "Total Number of Students",  y: <?php echo $ns; ?> },
        { label: "Submitted", y: <?php echo $cl;?> },
        { label: "Not Submited", y: <?php echo $cs;?>  },
        { label: "Not Cleared by Librarian",  y: <?php echo $lb;?>},
        { label: "Cleared by Librarian",  y: <?php echo $lbcl;?>},
        { label: "Cleared by Dean of School",  y: <?php echo $deansh;?>},
        { label: "Not Cleared by Dean of School",  y: <?php echo $deancl;?>  },
        { label: "Cleared by Finance Department",  y: <?php echo $finance;?>  },
        { label: "Not Cleared by Finance Department",  y: <?php echo $financedcl;?>},
        { label: "Academic Affairs Cleared",y:<?php echo $academicCl?>},
        { label: "Not Cleared by Academic Affairs",y:<?php echo $academicDcl?>},        
        { label: "Dean of Student Affairs Cleared",y:<?php echo $Dosacl?>},
        { label: "Not Cleared by Dean of Student Affairs ",y:<?php echo $Dosadcl?>}
              
      ]
    }
    ]
  });
  chart.render();
}
</script>
  <script type="text/javascript" src="assets/canvasjs.min.js"></script></head>
  <body>
   <div id="chartContainer" style="height: 300px; width: 100%;">
   </div>
 </body>
</html>