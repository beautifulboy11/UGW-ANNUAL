<!DOCTYPE HTML>
<html>
    <head>

        <script src="assets/jquery-1.12.4.min.js"></script>
        <script src="assets/canvasjs.min.js"></script>
        <?php
        include_once '../../config/config.php';
        $sql = "SELECT COUNT(DISTINCT fu.post_author) AS contributors, ufm.faculty_id
FROM file_uploads AS fu
LEFT JOIN ugw_users usr ON fu.post_author = usr.ID
LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id
WHERE ufm.faculty_id = 1
GROUP BY ufm.faculty_id";
        $result = $DB_CONNECTION->query($sql);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $ns = $row['contributors'];
        }

        $sql1 = "SELECT COUNT(DISTINCT fu.post_author) AS contributors, ufm.faculty_id
FROM file_uploads AS fu
LEFT JOIN ugw_users usr ON fu.post_author = usr.ID
LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id
WHERE ufm.faculty_id = 2
GROUP BY ufm.faculty_id";
        $result1 = $DB_CONNECTION->query($sql1);

        while ($row1 = $result1->fetch_assoc()) {
            //$ns = $row['Number_Of_Students'];
            $cs = $row1['contributors'];
        }

        $sql2 = "SELECT COUNT(DISTINCT fu.post_author) AS contributors, ufm.faculty_id
FROM file_uploads AS fu
LEFT JOIN ugw_users usr ON fu.post_author = usr.ID
LEFT JOIN ugw_user_faculty_map AS ufm ON usr.ID = ufm.user_id
WHERE ufm.faculty_id = 3
GROUP BY ufm.faculty_id";
        $result2 = $DB_CONNECTION->query($sql2);
        $data2 = array();
        if ($result2->num_rows == 0) {
            $cl = 0;
        }
        while ($row2 = $result2->fetch_assoc()) {
            $cl = $row2['contributors'];
        }


        $dataPoints = array(
            array('y' => $ns, "name" => "Business", "exploded" => true),
            array('y' => $cs, "name" => "Education"),
            array('y' => $cl, "name" => "Science")
        );
        ?>
        
        <script type="text/javascript" src="assets/canvasjs.min.js"></script></head>
    <body class="panel-body" style="padding-left:10px;margin-top: 30px;">
        <div id="chartContainer">
        </div>
        <script type="text/javascript">

            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer", {
                    title: {
                        text: "Number of Contributors By Faculty"
                    },
                    data: [
                        {
                            // Change type to "doughnut", "line", "splineArea", etc.
                            type: "column",
                            dataPoints: [
                                {label: "Business", y: <?php echo $ns; ?>},
                                {label: "Education", y: <?php echo $cl; ?>},
                                {label: "Science", y: <?php echo $cs; ?>}


                            ]
                        }
                    ]
                });
                chart.render();
            }
        </script>
    </body>
</html>