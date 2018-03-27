<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GAPC Main</title>
        <link rel="shortcut icon" href="<?php echo site_url('resources/my-images/gapc-favicon.ico')?>">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




    </head>

    <body>

    <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Your application details</h3>
            </div>
            <div class="box-tools">
                    <a href="<?php echo site_url('landing_page/signout'); ?>" class="btn btn-danger btn-sm">Sign-out</a> 
            </div>
            <div class="box-body">
                <table id="tbapp" class="table table-striped datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Applicant Name</th>
                        <th>Course</th>
                        <th>Applicant Status</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Civil Status</th>
                        <th>Nationality</th>
                        <th>Date Submitted</th>
                        <th>Date Modified</th>
                        <th>Actions</th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php foreach($applicant as $a){ ?>
                        <tr>
                            <td><?php echo $a['apid']; ?></td>
                            <td><?php echo $a['apfn']; ?> <?php echo $a['apmn']; ?> <?php echo $a['apln']; ?></td>
                            <td><?php echo $a['courseCode']; ?></td>
                            <td><?php echo $a['studentstat']; ?></td>
                            <td><?php echo $a['age']; ?></td>
                            <td><?php echo $a['gender']; ?></td>
                            <td><?php echo $a['civstat']; ?></td>
                            <td><?php echo $a['nationality']; ?></td>
                            <td><?php echo $a['datesubmitted']; ?></td>
                            <td><?php echo $a['datemodified']; ?></td>
                            <td>
                                <a href="<?php echo site_url('landing_page/appedit/'.$a['apid']); ?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil" ></span> Edit</a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>

                </table>
                                
            </div>
        </div>
    </div>
</div>

<script src="<?php echo site_url('resources\js\jquery.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>

        <script src="<?php echo site_url('resources/input-mask/jquery.inputmask.js');?>"></script>
        <script src="<?php echo site_url('resources/input-mask/jquery.inputmask.extensions.js');?>"></script>
        <script src="<?php echo site_url('resources/input-mask/jquery.inputmask.date.extensions.js');?>"></script>

        <script>
            $('[data-mask]').inputmask();
        </script>
      

    </body>

    </html>




<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
