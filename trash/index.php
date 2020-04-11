
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Language" content="en">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>FEEDER</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
      <meta name="description" content="This is an example dashboard created using build-in elements and components.">
      <meta name="msapplication-tap-highlight" content="no">
      <!--
         =========================================================
         * ArchitectUI HTML Theme Dashboard - v1.0.0
         =========================================================
         * Product Page: https://dashboardpack.com
         * Copyright 2019 DashboardPack (https://dashboardpack.com)
         * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
         =========================================================
         * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
         -->
      <link href="./main.css" rel="stylesheet">
      <link href="./footable/css/footable.bootstrap.css" rel="stylesheet">
   </head>
   <body>
      <div class="app-container app-theme-white body-tabs-shadow ">
         <div class="app-main">
            <div class="app-main__outer">
               <div class="app-main__inner">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="main-card mb-3 card">
                           <div class="card-header">
                              <!--Search and buttons-->
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <!--School Year Dropdown-->
                                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-info">School Year</button>
                                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                             <h6 tabindex="-1" class="dropdown-header"></h6>
                                             <?php
                                                $db_dd = new PDO('mysql:host=localhost;dbname=feeder_2', 'root', '');
                                                
                                                $stmt_dd = $db_dd->prepare("SELECT school_year.school_year FROM school_year
                                                ");
                                                $stmt_dd->execute();
                                                while($row_dd=$stmt_dd->fetch()){
                                                ?>
                                             <button type="button" tabindex="0" class="dropdown-item"><?php echo $row_dd['school_year']?></button>
                                             <div tabindex="-1" class="dropdown-divider"></div>
                                             <!--School Year Dropdown End-->
                                             <?php
                                                }
                                                
                                                ?>
                                          </div>
                                          <!--School Year Dropdown End-->
                                       </div>
                                       <input type="text" class="form-control">
                                       <button class="btn  ml-4 btn-secondary">Trace</button>
                                    </div>
                                 </div>
                                 <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                       <button class="btn btn-danger" onclick="window.location.href = 'dashboard.php';">Dashboard</button>
                                    </div>
                                 </div>
                              </div>
                              <!--Search and buttons End-->
                           </div>
                           <div class="table-responsive">
                              <table id="myTable" class="mb-0 table table-hover" data-filter="#filter">
                                 <!--Table Headers-->
                                 <thead>
                                    <tr>
                                       <th data-toggle="true" class="text-center">School Year</th>
                                       <th data-hide="phone" class="text-center"> High School</th>
                                       <th class="text-center"> Address</th>
                                       <th class="text-center">Total Count Students</th>
                                       <th class="text-center">School Type</th>
                                    </tr>
                                 </thead>
                                 <!--Table Headers End-->
                                 <tbody>
                                    <?php
                                       $db = new PDO('mysql:host=localhost;dbname=feeder_2', 'root', '');
                                       
                                       $stmt = $db->prepare("SELECT school_year.school_year, feeder_data.feeder_hs, feeder_data.feeder_address, feeder_data.feeder_total_students, feeder_data.feeder_type
                                       FROM school_year INNER JOIN feeder_data ON school_year.school_year_id = feeder_data.feeder_school_year;
                                       
                                       ");
                                       $stmt->execute();
                                       while($row=$stmt->fetch()){
                                       ?>
                                    <tr>
                                       <td class="text-center"><?php echo $row['school_year']?> </td>
                                       <td ><?php echo $row['feeder_hs']?> </td>
                                       <td class="text-center"><?php echo $row['feeder_address']?> </td>
                                       <td class="text-center"><?php echo $row['feeder_total_students']?> </td>
                                       <td class="text-center"><?php echo $row['feeder_type']?> </td>
                                    </tr>
                                    <?php
                                       }
                                       
                                       ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="./assets/scripts/main.js"></script>
      <script src="footable/js/footable.js"></script>
      <script src="jquery.min.js"> </script>
      <script src="ddtf.js"></script>
   </body>
</html>