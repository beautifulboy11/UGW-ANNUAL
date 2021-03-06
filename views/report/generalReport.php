<!DOCTYPE html>
<html>
  <head>
    <title>Student Clearance Report</title>
    <script src="assets/jquery-1.12.4.min.js"></script>
    <script src="assets/canvasjs.min.js"></script>
  </head>
  <?php 
        include_once '../../config/config.php';
        $sqlQuery = "SELECT COUNT(fu.id) AS total_no_articles\n"
    . " FROM file_uploads AS fu \n"
    . " LEFT JOIN ugw_users usr ON fu.post_author = usr.ID \n"
    . " LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id";                
                
        $sqliresult = $DB_CONNECTION->query($sqlQuery);
        if ($sqliresult->num_rows == 0){
           $total = 1;
        }
        while($row=$sqliresult->fetch_assoc())
        {
          $total = $row['total_no_articles'];                     
        }
        
                        
        $sql = "SELECT COUNT(fu.id) AS no_articles, ufm.faculty_id, fu.post_date "
                . "FROM file_uploads AS fu "
                . "LEFT JOIN ugw_users usr ON fu.post_author = usr.ID "
                . "LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id "
                . "WHERE  ufm.faculty_id = 1 "
                . "GROUP BY ufm.faculty_id";
        $SQLresult = $DB_CONNECTION->query($sql);
        if ($SQLresult->num_rows == 0){
           $faculty_One_articles = 0;
        }
        while($row=$SQLresult->fetch_assoc())
        {
          $faculty_One_articles = ($row['no_articles']/$total)*100;                     
        }

        $sql = "SELECT COUNT(fu.id) AS no_articles, ufm.faculty_id, fu.post_date "
                . "FROM file_uploads AS fu "
                . "LEFT JOIN ugw_users usr ON fu.post_author = usr.ID "
                . "LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id "
                . "WHERE  ufm.faculty_id = 2 "
                . "GROUP BY ufm.faculty_id";
        $result = $DB_CONNECTION->query($sql);
        if ($result->num_rows == 0){
           $faculty_Two_articles = 0;
       }    
        while($row1=$result->fetch_assoc())
        {      
          $faculty_Two_articles = ($row1['no_articles']/$total)*100;           
        }

        $sql2 = "SELECT COUNT(fu.id) AS no_articles, ufm.faculty_id, fu.post_date "
                . "FROM file_uploads AS fu "
                . "LEFT JOIN ugw_users usr ON fu.post_author = usr.ID "
                . "LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id "
                . "WHERE  ufm.faculty_id = 3 "
                . "GROUP BY ufm.faculty_id";
        $results = $DB_CONNECTION->query($sql2);
       if ($results->num_rows == 0){
           $faculty_Three_articles = 0;
       }               
        while($row2=$results->fetch_assoc())
        {          
          $faculty_Three_articles = ($row2['no_articles']/$total)*100;           
        }      
        
        $dataPoints = array(            
              array('y' => $faculty_One_articles,"name"=>"Business Faculty","exploded" =>false),
              array('y'=> $faculty_Three_articles, "name"=>"Science Faculty"),
              array('y'=> $faculty_Two_articles,"name"=>"Education Faculty")       
            );
    ?>
        
<body>
<div class="panel-body" style="padding-left:10px;margin-top: 30px;">
                        <!--Php supplying chart2--> 
     
    <div id="chartContainer"></div>
    <!--Script supporting chart2-->
    <script type="text/javascript">
        $(function () {
            var chart = new CanvasJS.Chart("chartContainer",
            {
                theme: "theme2",
                title:{
                    text: "Percentage Contribution Report"
                },
                exportFileName: "New Year Resolutions",
                exportEnabled: true,
                animationEnabled: true,   
                data: [
                {       
                    type: "pie",
                    showInLegend: true,
                    toolTipContent: "{name}: <strong>{y}%</strong>",
                    indexLabel: "{name} {y}%",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        });
    </script>
</div>
</body>