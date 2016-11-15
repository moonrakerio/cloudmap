<!DOCTYPE html>
<?php
include './config.php';
$Title = "Add New Entry";
$id = 0;
$row;
if (isset($_REQUEST["id"])) {
    $Title = "Update Selected Entry";
    $id = $_REQUEST["id"];
    $sqli = "SELECT * FROM `cloud` WHERE id =" . $id;
    $result = mysqli_query($con, $sqli);
    if ($result) {
        $row = mysqli_fetch_array($result);
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $Title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <div id="nav_id">
            <nav class="navbar" style="background-color: #094A60; height: 148px;  border-radius: 0px; margin-bottom: 0px;">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <div class="col-sm-12" style="color: white; margin-top: 25px; font: bold; font-family: sans-serif;">
                            <h1>marcopolo</h1><h4> &nbsp; Data about Clouds</h4>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav" style="color: white; text-decoration: none;">
                            <li class="active"><a href="#"  style="color: white; text-decoration: none;"> &nbsp; <h2>Cloud Map</h2> &nbsp; </a></li>
                            <li><a href="#"  style="color: white; text-decoration: none;"> &nbsp; <h2>Feature2</h2> &nbsp; </a></li>
                            <li><a href="#"  style="color: white; text-decoration: none;"> &nbsp; <h2>Feature2</h2> &nbsp; </a></li>
                            <li><a href="#" style="color: white; text-decoration: none;"> &nbsp; <h2>Blog</h2> &nbsp; </a></li>
                            <li><a href="#" style="color: white; text-decoration: none;"> &nbsp; <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2> &nbsp; </a></li>
                        </ul>
                    </div>
                </div> 
            </nav>
            <nav class="navbar" style="background-color: #177E89; height: 52px; border-radius: 0px; margin-bottom: 0px;">
                <div class="container-fluid">
                    <div class="col-lg-12" style="padding-top: 7px;">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <label style="font-size: 24px; color: white;"><?php echo $Title; ?></label>
                            </div> 
                        </div>  
                    </div> 
                </div> 
            </nav>
        </div>
        <div id="body_id" style="overflow-y: scroll">
            <div class="container-fluid">
                <br/>
                <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Company">Company:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Company" name="Company" placeholder="Enter Company Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Company" name="Company" value="<?php echo $row["Company"]; ?>" placeholder="Enter Company Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Region">Region:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Region" name="Region" placeholder="Enter Region Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Region" name="Region" value="<?php echo $row["Region"]; ?>" placeholder="Enter Region Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Location">Location:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Location" name="Location" placeholder="Enter Location Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Location" name="Location" value="<?php echo $row["Location"]; ?>" placeholder="Enter Location Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Lat">Latitude:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Lat" name="Lat" placeholder="Enter Latitude">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Lat" name="Lat" value="<?php echo $row["Lon"]; ?>" placeholder="Enter Latitude">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Longitude">Longitude:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Lon" name="Lon" placeholder="Enter Longitude">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Lon" name="Lon" value="<?php echo $row["Lat"]; ?>" placeholder="Enter Longitude">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Website">Website:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Website" name="Website" placeholder="Enter Website Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Website" name="Website" value="<?php echo $row["Website"]; ?>" placeholder="Enter Website Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Compute">Compute:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Compute" name="Compute" placeholder="Enter Compute">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Compute" name="Compute" value="<?php echo $row["Compute"]; ?>" placeholder="Enter Compute">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Compute_Technology">Compute Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Compute_Technology" name="Compute_Technology" placeholder="Enter Compute Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Compute_Technology" name="Compute_Technology" value="<?php echo $row["Compute_Technology"]; ?>" placeholder="Enter Compute Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Compute_Version">Compute Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Compute_Version" name="Compute_Version" placeholder="Enter Compute Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Compute_Version" name="Compute_Version" value="<?php echo $row["Compute_Version"]; ?>" placeholder="Enter Compute Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Container_Service">Container Service:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Container_Service" name="Container_Service" placeholder="Enter Container Service Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Container_Service" name="Container_Service" value="<?php echo $row["Container_Service"]; ?>" placeholder="Enter Container Service Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Container_Service_Technology">Container Service Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Container_Service_Technology" name="Continer_Service_Technology" placeholder="Enter Container Service Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Container_Service_Technology" name="Continer_Service_Technology" value="<?php echo $row["Continer_Service_Technology"]; ?>" placeholder="Enter Container Service Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Container_Service_Version">Container Service Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Container_Service_Version" name="Container_Service_Version" placeholder="Enter Container Service Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Container_Service_Version" name="Container_Service_Version" value="<?php echo $row["Container_Service_Version"]; ?>" placeholder="Enter Container Service Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Orchestration_Service">Orchestration Service:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Orchestration_Service" name="Orchestration_Service" placeholder="Enter Orchestration Service Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Orchestration_Service" name="Orchestration_Service" value="<?php echo $row["Orchestration_Service"]; ?>" placeholder="Enter Orchestration Service Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Orchestration_Technology">Orchestration Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Orchestration_Technology" name="Orchestration_Technology" placeholder="Enter Orchestration Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Orchestration_Technology" name="Orchestration_Technology" value="<?php echo $row["Orchestration_Technology"]; ?>" placeholder="Enter Orchestration Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Orchestration_Version">Orchestration Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Orchestration_Version" name="Orchestration_Version" placeholder="Enter Orchestration Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Orchestration_Version" name="Orchestration_Version" value="<?php echo $row["Orchestration_Version"]; ?>" placeholder="Enter Orchestration Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Bare_Metal_Service">Bare Metal Service:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Bare_Metal_Service" name="Bare_Metal_Service" placeholder="Enter Bare Metal Service Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Bare_Metal_Service" name="Bare_Metal_Service" value="<?php echo $row["Bare_Metal_Service"]; ?>" placeholder="Enter Bare Metal Service Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Bare_Metal_Technology">Bare Metal Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Bare_Metal_Technology" name="Bare_Metal_Technology" placeholder="Enter Bare Metal Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Bare_Metal_Technology" name="Bare_Metal_Technology" value="<?php echo $row["Bare_Metal_Technology"]; ?>" placeholder="Enter Bare Metal Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Bare_Metal_Version">Bare Metal Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Bare_Metal_Version" name="Bare_Metal_Version" placeholder="Enter Bare Metal Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Bare_Metal_Version" name="Bare_Metal_Version" value="<?php echo $row["Bare_Metal_Version"]; ?>" placeholder="Enter Bare Metal Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="DNS_Service">DNS Service:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="DNS_Service" name="DNS_Service" placeholder="Enter DNS Service Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="DNS_Service" name="DNS_Service" value="<?php echo $row["DNS_Service"]; ?>" placeholder="Enter DNS Service Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="DNS_Technology">DNS Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="DNS_Technology" name="DNS_Technology" placeholder="Enter DNS Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="DNS_Technology" name="DNS_Technology" value="<?php echo $row["DNS_Technology"]; ?>" placeholder="Enter DNS Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="DNS_Version">DNS Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="DNS_Version" name="DNS_Version" placeholder="Enter DNS Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="DNS_Version" name="DNS_Version" value="<?php echo $row["DNS_Version"]; ?>" placeholder="Enter DNS Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Object_Storage">Object Storage:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Object_Storage" name="Object_Storage" placeholder="Enter Object Storage Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Object_Storage" name="Object_Storage" value="<?php echo $row["Object_Storage"]; ?>" placeholder="Enter Object Storage Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Object_Storage_Technology">Object Storage Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Object_Storage_Technology" name="Object_Storage_Technology" placeholder="Enter Object Storage Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Object_Storage_Technology" name="Object_Storage_Technology" value="<?php echo $row["Object_Storage_Technology"]; ?>" placeholder="Enter Object Storage Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Object_Storage_Version">Object Storage Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Object_Storage_Version" name="Object_Storage_Version" placeholder="Enter Object Storage Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Object_Storage_Version" name="Object_Storage_Version" value="<?php echo $row["Object_Storage_Version"]; ?>" placeholder="Enter Object Storage Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Block_Storage">Block Storage:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Block_Storage" name="Block_Storage" placeholder="Enter Block Storage Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Block_Storage" name="Block_Storage" value="<?php echo $row["Block_Storage"]; ?>" placeholder="Enter Block Storage Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Block_Storage_Technology">Block Storage Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Block_Storage_Technology" name="Block_Storage_Technology" placeholder="Enter Block Storage Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Block_Storage_Technology" name="Block_Storage_Technology" value="<?php echo $row["Block_Storage_Technology"]; ?>" placeholder="Enter Block Storage Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Block_Storage_Version">Block Storage Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Block_Storage_Version" name="Block_Storage_Version" placeholder="Enter Block Storage Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Block_Storage_Version" name="Block_Storage_Version" value="<?php echo $row["Block_Storage_Version"]; ?>" placeholder="Enter Block Storage Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="File_System_Storage">File System Storage:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="File_System_Storage" name="File_System_Storage" placeholder="Enter File System Storage Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="File_System_Storage" name="File_System_Storage" value="<?php echo $row["File_System_Storage"]; ?>" placeholder="Enter File System Storage Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="File_System_Storage_Technology">File System Storage Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="File_System_Storage_Technology" name="File_System_Storage_Technology" placeholder="Enter File System Storage Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="File_System_Storage_Technology" name="File_System_Storage_Technology" value="<?php echo $row["File_System_Storage_Technology"]; ?>" placeholder="Enter File System Storage Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="File_System_Storage_Version">File System Storage Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="File_System_Storage_Version" name="File_System_Storage_Version" placeholder="Enter File System Storage Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="File_System_Storage_Version" name="File_System_Storage_Version" value="<?php echo $row["File_System_Storage_Version"]; ?>" placeholder="Enter File System Storage Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CDN">CDN:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="CDN" name="CDN" placeholder="Enter CDN Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="CDN" name="CDN" value="<?php echo $row["CDN"]; ?>" placeholder="Enter CDN Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CDN_Technology">CDN Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="CDN_Technology" name="CDN_Technology" placeholder="Enter CDN Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="CDN_Technology" name="CDN_Technology" value="<?php echo $row["CDN_Technology"]; ?>" placeholder="Enter CDN Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CDN_Technology_Versio">CDN Technology Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="CDN_Technology_Versio" name="CDN_Technology_Versio" placeholder="Enter CDN Technology Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="CDN_Technology_Versio" name="CDN_Technology_Versio" value="<?php echo $row["CDN_Technology_Versio"]; ?>" placeholder="Enter CDN Technology Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="VPC">VPC:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="VPC" name="VPC" placeholder="Enter VPC Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="VPC" name="VPC" value="<?php echo $row["VPC"]; ?>" placeholder="Enter VPC Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="VPC_Technology">VPC Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="VPC_Technology" name="VPC_Technology" placeholder="Enter VPC Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="VPC_Technology" name="VPC_Technology" value="<?php echo $row["VPC_Technology"]; ?>" placeholder="Enter VPC Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="VPC_Version">VPC Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="VPC_Version" name="VPC_Version" placeholder="Enter VPC Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="VPC_Version" name="VPC_Version" value="<?php echo $row["VPC_Version"]; ?>" placeholder="Enter VPC Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Serverless_compute">Serverless Compute:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Serverless_compute" name="Serverless_compute" placeholder="Enter Serverless Compute Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Serverless_compute" name="Serverless_compute" value="<?php echo $row["Serverless_compute"]; ?>" placeholder="Enter Serverless Compute Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Serverless_Compute_Technology">Serverless Compute Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Serverless_Compute_Technology" name="Serverless_Compute_Technology" placeholder="Enter Serverless Compute Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Serverless_Compute_Technology" name="Serverless_Compute_Technology" value="<?php echo $row["Serverless_Compute_Technology"]; ?>" placeholder="Enter Serverless Compute Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Serverless_Compute_Version">Serverless Compute Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Serverless_Compute_Version" name="Serverless_Compute_Version" placeholder="Enter Serverless Compute Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Serverless_Compute_Version" name="Serverless_Compute_Version" value="<?php echo $row["Serverless_Compute_Version"]; ?>" placeholder="Enter Serverless Compute Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Relational_Database_Service">Relational Database Service:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Relational_Database_Service" name="Relational_Database_Service" placeholder="Enter Relational Database Service Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Relational_Database_Service" name="Relational_Database_Service" value="<?php echo $row["Relational_Database_Service"]; ?>" placeholder="Enter Relational Database Service Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Relational_Database_Technology">Relational Database Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Relational_Database_Technology" name="Relational_Database_Technology" placeholder="Enter Relational Database Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Relational_Database_Technology" name="Relational_Database_Technology" value="<?php echo $row["Relational_Database_Technology"]; ?>" placeholder="Enter Relational Database Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Relational_Database_Version">Relational Database Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Relational_Database_Version" name="Relational_Database_Version" placeholder="Enter Relational Database Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Relational_Database_Version" name="Relational_Database_Version" value="<?php echo $row["Relational_Database_Version"]; ?>" placeholder="Enter Relational Database Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="NoSQL_Service">NoSQL Service:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="NoSQL_Service" name="NoSQL_Service" placeholder="Enter NoSQL Service Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="NoSQL_Service" name="NoSQL_Service" value="<?php echo $row["NoSQL_Service"]; ?>" placeholder="Enter NoSQL Service Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="NoSQL_Service_Technology">NoSQL Service Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="NoSQL_Service_Technology" name="NoSQL_Service_Technology" placeholder="Enter NoSQL Service Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="NoSQL_Service_Technology" name="NoSQL_Service_Technology" value="<?php echo $row["NoSQL_Service_Technology"]; ?>" placeholder="Enter NoSQL Service Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="NoSQL_Service_Version">NoSQL Service Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="NoSQL_Service_Version" name="NoSQL_Service_Version" placeholder="Enter NoSQL Service Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="NoSQL_Service_Version" name="NoSQL_Service_Version" value="<?php echo $row["NoSQL_Service_Version"]; ?>" placeholder="Enter NoSQL Service Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Auto_Scaling">Auto Scaling:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="NoSQL_Service_Version" name="NoSQL_Service_Version" placeholder="Enter NoSQL Service Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="NoSQL_Service_Version" name="NoSQL_Service_Version" value="<?php echo $row["NoSQL_Service_Version"]; ?>" placeholder="Enter NoSQL Service Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Auto_Scaling_Technology">Auto Scaling Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Auto_Scaling_Technology" name="Auto_Scaling_Technology" placeholder="Enter Auto Scaling Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Auto_Scaling_Technology" name="Auto_Scaling_Technology" value="<?php echo $row["Auto_Scaling_Technology"]; ?>" placeholder="Enter Auto Scaling Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Auto_Scaling_Version">Auto Scaling Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Auto_Scaling_Version" name="Auto_Scaling_Version" placeholder="Enter Auto Scaling Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Auto_Scaling_Version" name="Auto_Scaling_Version" value="<?php echo $row["Auto_Scaling_Version"]; ?>" placeholder="Enter Auto Scaling Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Load_Balancing">Load Balancing:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Load_Balancing" name="Load_Balancing" placeholder="Enter Load Balancing Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Load_Balancing" name="Load_Balancing" value="<?php echo $row["Load_Balancing"]; ?>" placeholder="Enter Load Balancing Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Load_Balancing_Technology">Load Balancing Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Load_Balancing_Technology" name="Load_Balancing_Technology" placeholder="Enter Load Balancing Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Load_Balancing_Technology" name="Load_Balancing_Technology" value="<?php echo $row["Load_Balancing_Technology"]; ?>" placeholder="Enter Load Balancing Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Load_Balancing_Version">Load Balancing Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Load_Balancing_Version" name="Load_Balancing_Version" placeholder="Enter Load Balancing Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Load_Balancing_Version" name="Load_Balancing_Version" value="<?php echo $row["Load_Balancing_Version"]; ?>" placeholder="Enter Load Balancing Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Archive_Storage">Archive Storage:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Archive_Storage" name="Archive_Storage" placeholder="Enter Archive Storage Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Archive_Storage" name="Archive_Storage" value="<?php echo $row["Archive_Storage"]; ?>" placeholder="Enter Archive Storage Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Archive_Storage_Technology">Archive Storage Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Archive_Storage_Technology" name="Archive_Storage_Technology" placeholder="Enter Archive Storage Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Archive_Storage_Technology" name="Archive_Storage_Technology" value="<?php echo $row["Archive_Storage_Technology"]; ?>" placeholder="Enter Archive Storage Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Archive_Storage_Version">Archive Storage Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Archive_Storage_Version" name="Archive_Storage_Version" placeholder="Enter Archive Storage Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Archive_Storage_Version" name="Archive_Storage_Version" value="<?php echo $row["Archive_Storage_Version"]; ?>" placeholder="Enter Archive Storage Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Direct_Connect">Direct Connect:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Direct_Connect" name="Direct_Connect" placeholder="Enter Direct Connect Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Direct_Connect" name="Direct_Connect" value="<?php echo $row["Direct_Connect"]; ?>" placeholder="Enter Direct Connect Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Direct_Connect_Technology">Direct Connect Technology:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Direct_Connect_Technology" name="Direct_Connect_Technology" placeholder="Enter Direct Connect Technology Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Direct_Connect_Technology" name="Direct_Connect_Technology" value="<?php echo $row["Direct_Connect_Technology"]; ?>" placeholder="Enter Direct Connect Technology Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Direct_Connect_Version">Direct Connect Version:</label>
                        <div class="col-sm-8">
                            <?php if (!$id) { ?>
                                <input type="text" class="form-control" id="Direct_Connect_Version" name="Direct_Connect_Version" placeholder="Enter Direct Connect Version Name">
                            <?php } else { ?>
                                <input type="text" class="form-control" id="Direct_Connect_Version" name="Direct_Connect_Version" value="<?php echo $row["Direct_Connect_Version"]; ?>" placeholder="Enter Direct Connect Version Name">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <?php if ($id == 0) { ?>
                                <button id="Enter" name="submit" type="submit" value="NewEntry" class="btn btn-default">Submit</button>
                            <?php } else { ?>
                                <button id="update" name="submit" value="Update" type="submit" class="btn btn-default">Update</button>    
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        //form submits here
        if (isset($_REQUEST["submit"])) {
            $str = "";
            $val = $_REQUEST["submit"];
            if ($val == "NewEntry") {
                $keys = "";
                $vals = "";
                $chk = 1;
                foreach ($_REQUEST as $key => $val) {
                    if ($key != "id" && $key != "submit") {
                        if ($chk == 1) {
                            $keys .= "$key";
                            $vals .= "'" . $val . "'";
                            $chk = 2;
                        } else {
                            $keys .= ", $key";
                            $vals .= ", '" . $val . "'";
                        }
                    }
                    $str = "INSERT INTO `cloud`(" . $keys . ") VALUES(" . $vals . ");";
                }
            } elseif ($val == "Update") {
                $str = "UPDATE `cloud` SET ";
                $chk = 1;
                foreach ($_REQUEST as $key => $val) {
                    if ($key != "id" && $key != "submit") {
                        if ($chk == 1) {
                            $str .= "$key='" . $val . "'";
                            $chk = 2;
                        } else {
                            $str .= " ,$key='" . $val . "'";
                        }
                    }
                }
                $str .= " WHERE `id` = " . $id;
            }
            mysqli_query($con, $str);
        }

        mysqli_close($con);
        ?>
    </body>
</html>
