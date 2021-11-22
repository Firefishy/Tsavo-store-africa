 <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
	<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>

    <script src="includes/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="includes/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="includes/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="includes/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="includes/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="includes/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="includes/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="includes/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="includes/assets/libs/flot/excanvas.js"></script>
    <script src="includes/assets/libs/flot/jquery.flot.js"></script>
    <script src="includes/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="includes/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="includes/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="includes/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="includes/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="includes/dist/js/pages/chart/chart-page-init.js"></script>
	<!-- CK Editor -->
<script src="includes/ckeditor/ckeditor.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../../bower_components/chart.js/Chart.js"></script>

    <!-- this page js -->
    <script src="includes/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="includes/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="includes/assets/extra-libs/DataTables/datatables.min.js"></script>
	
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

<script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
	<script>
  $(function () {
    // Datatable
    $('#example1').DataTable()
    //CK Editor
    CKEDITOR.replace('editor1')
  });
</script>
<script>
  $(function () {
    // Datatable
    $('#example2').DataTable()
    //CK Editor
    CKEDITOR.replace('editor2')
  });
</script>
  <script>
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});</script>
