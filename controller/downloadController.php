<?php
include '../config/config.php';

$sql = "SELECT `ugw_users`.`name`AS 'name', `file_uploads`.`post_author`, `file_uploads`.`post_title`, `file_uploads`.`post_date`, `file_uploads`.`id`, `file_uploads`.`filelocation`, `file_uploads`.`post_status`, `file_uploads`.`comment_status`
FROM `file_uploads`
    LEFT JOIN `ugw_users` ON `file_uploads`.`post_author` = `ugw_users`.`ID`
    LEFT JOIN `ugw_user_faculty_map` ON `ugw_users`.`ID` = `ugw_user_faculty_map`.`user_id`
    WHERE file_uploads.post_status = 'publish'";

$result = $DB_CONNECTION->query($sql);
if (!$result = $DB_CONNECTION->query($sql)) {
    echo " " . $sql . "<br />" . "<span style='color:red;'>" . $DB_CONNECTION->error;
    "</span>";
    exit();
}
$data = array();
while ($row=$result->fetch_array())
{    
    $data [] =  $row['filelocation'];            
}

$files = array();
for ($i=0; $i< count($data); $i++)
{    
    $files [] = $data[$i];    
}
# create new zip opbject
$zip = new ZipArchive();

# create a temp file & open it
$tmp_file = tempnam('.', '');
$zip->open($tmp_file, ZipArchive::CREATE);

# loop through each file
foreach ($files as $file) {
    # download file
    $download_file = file_get_contents($file);

    #add it to the zip
    $zip->addFromString(basename($file), $download_file);
}

# close zip
$zip->close();

# send the file to the browser as a download
header('Content-disposition: attachment; filename=download.zip');
header('Content-type: application/zip');
readfile($tmp_file);

