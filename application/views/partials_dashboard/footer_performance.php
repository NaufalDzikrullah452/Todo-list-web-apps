        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">Team 1</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= config_item('plugins') ?>common/common.min.js"></script>
    <script src="<?= config_item('js_dashboard') ?>custom.min.js"></script>
    <script src="<?= config_item('js_dashboard') ?>settings.js"></script>
    <script src="<?= config_item('js_dashboard') ?>gleek.js"></script>
    <script src="<?= config_item('js_dashboard') ?>styleSwitcher.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>

</body>

</html>