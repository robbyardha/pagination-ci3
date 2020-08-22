<footer class="footer">
    <span>2020 © SMAM1TA.</span>
</footer>

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?= base_url('assets') ?>/js/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets') ?>/js/detect.js"></script>
<script src="<?= base_url('assets') ?>/js/fastclick.js"></script>
<script src="<?= base_url('assets') ?>/js/jquery.blockUI.js"></script>
<script src="<?= base_url('assets') ?>/js/waves.js"></script>
<script src="<?= base_url('assets') ?>/js/jquery.nicescroll.js"></script>
<script src="<?= base_url('assets') ?>/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('assets') ?>/js/jquery.slimscroll.js"></script>
<script src="<?= base_url('assets') ?>/plugins/switchery/switchery.min.js"></script>

<!--Morris Chart-->
<script src="<?= base_url('assets') ?>/plugins/morris/morris.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/raphael/raphael.min.js"></script>

<!-- Counter Up  -->
<script src="<?= base_url('assets') ?>/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/counterup/jquery.counterup.js"></script>

<!-- Page specific js -->
<script src="<?= base_url('assets') ?>/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="<?= base_url('assets') ?>/js/jquery.core.js"></script>
<script src="<?= base_url('assets') ?>/js/jquery.app.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url('assets') ?>/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/buttons.print.min.js"></script>

<!-- Key Tables -->
<script src="<?= base_url('assets') ?>/plugins/datatables/dataTables.keyTable.min.js"></script>

<!-- Responsive examples -->
<script src="<?= base_url('assets') ?>/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Selection table -->
<script src="<?= base_url('assets') ?>/plugins/datatables/dataTables.select.min.js"></script>

<!-- Autocomplete -->
<script src="<?= base_url('assets') ?>/plugins/autocomplete/jquery.mockjax.js"></script>
<script src="<?= base_url('assets') ?>/plugins/autocomplete/jquery.autocomplete.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/autocomplete/countries.js"></script>
<script src="<?= base_url('assets') ?>/pages/jquery.autocomplete.init.js"></script>

<script>
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
</script>
</body>

</html>