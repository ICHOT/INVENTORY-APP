</div><!-- /#right-panel -->
<!-- Right Panel -->
<script src="../assets/js/vendor/jquery2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd
/popper.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/lib/chartjs/Chart.bundle.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script src="../assets/js/widgets.js"></script>
<script src="../assets/js/lib/vectormap/jquery.vmap.js"></script>
<script src="../assets/js/lib/vectormap/jquery.vmap.min.js"></script>
<script src="../assets/js/lib/vectormap/jquery.vmap.sampledata.js"></script>
<script src="../assets/js/lib/vectormap/country/jquery.vmap.world.js"></script>
<script src="../assets/js/lib/datatable/datatables.min.js"></script>
<script src="../assets/js/lib/datatable/dataTables.bootstrap.min.js"></script>
<script src="../assets/js/lib/datatable/dataTables.buttons.min.js"></script>
<script src="../assets/js/lib/datatable/buttons.bootstrap.min.js"></script>
<script src="../assets/js/lib/datatable/jszip.min.js"></script>
<script src="../assets/js/lib/datatable/pdfmake.min.js"></script>
<script src="../assets/js/lib/datatable/vfs_fonts.js"></script>
<script src="../assets/js/lib/datatable/buttons.html5.min.js"></script>
<script src="../assets/js/lib/datatable/buttons.print.min.js"></script>
<script src="../assets/js/lib/datatable/buttons.colVis.min.js"></script>
<script src="../assets/js/lib/data-table/datatablesinit.js"></script>

<!-- SB ADMIN 2 -->

<!-- Bootstrap core JavaScript-->
<script src="../sbadmin/vendor/jquery/jquery.min.js"></script>
<script src="../sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../sbadmin/js/sb-admin-2.min.js"></script>
<!-- SW2 -->
<script src="../assets/sw2.js"></script>
<script>
  (function($) {
    "use strict";
    jQuery('#vmap').vectorMap({
      map: 'world_en',
      backgroundColor: null,
      color: '#ffffff',
      hoverOpacity: 0.7,
      selectedColor: '#1de9b6',
      enableZoom: true,
      showTooltip: true,
      values: sample_data,
      scaleColors: ['#1de9b6', '#03a9f5'],
      normalizeFunction: 'polynomial'
    });
  })(jQuery);
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
  });
</script>
</body>

</html>