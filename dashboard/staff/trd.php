<?php
session_start();
if (isset($_SESSION['staff_id'])) {

?>
<?php include("functions/init.php"); ?>
<?php include("include/sider.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload 3rd Term Result</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./index">Home</a></li>
              <li class="breadcrumb-item active">Upload Result</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php validate_trd(); ?>
 <form method="POST" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Upload Third Term Report Sheet</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>Student/Pupil Admission Number.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-edit"></i></span>
                    </div>
                    <input type="text" placeholder="Input Admission No." name="admin" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
<br/>
                 <label>Student/Pupil Class.:</label>
                         <select name="load" class="custom-select">
                          <option name="load">Nursery</option>
                          <option name="load">Basic 1</option>
                          <option name="load">Basic 2</option>
                          <option name="load">Basic 3</option>
                          <option name="load">Basic 4</option>
                          <option name="load">Basic 5-6</option>
                          <option name="load">J.S.S 1</option>
                          <option name="load">J.S.S 2</option>
                          <option name="load">J.S.S 3</option>
                          <option name="load">S.S.S 1</option>
                          <option name="load">S.S.S 2</option>
                          <option name="load">S.S.S 3</option>
                        </select>
<br/><br/>
                <div class="form-group">
                  <label>Term.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" placeholder="Input Other Name" value="THIRD TERM" class="form-control" name="term" disabled>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
<br/>
                            <label>Promoted.:</label>
                         <select name="class" class="custom-select">
                          <option name="class">Nursery</option>
                          <option name="class">Basic 1</option>
                          <option name="class">Basic 2</option>
                          <option name="class">Basic 3</option>
                          <option name="class">Basic 4</option>
                          <option name="class">Basic 5-6</option>
                          <option name="class">J.S.S 1</option>
                          <option name="class">J.S.S 2</option>
                          <option name="class">J.S.S 3</option>
                          <option name="class">S.S.S 1</option>
                          <option name="class">S.S.S 2</option>
                          <option name="class">S.S.S 3</option>
                        </select>
                     <br/><br/>
   <br/>               <!-- /.input group -->
             
                   <div>
                    <label>Upload Student Result<span style="color: red"> (.pdf files only)</span></label>
                    <div>
                      <input type="file" name="fileToUpload" required>
                    </div>
                  </div>
                  <br/>
                   <p style="color: red">Kindly Re-check all details correctly before submitting, as rediting is not possible in this feature.</p>
              </div>

               <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Upload Result</button>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page script -->
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
<?php
}
else{
  header("location: ./login");
}

?>