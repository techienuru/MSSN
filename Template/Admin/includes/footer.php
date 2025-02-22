<!-- Footer -->
<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; <?php echo date("Y"); ?> <?=APP_NAME;?>
            </div>
            <div class="col-sm-6 text-right">
                For NSUK Muslim Ummah
            </div>
        </div>
    </div>
</footer>
<!-- /.site-footer -->
</div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?=$admin_assets.'/js/main.js'?>"></script>
    <script src="<?=$admin_assets?>/vendors/jquery/jquery.min.js"></script>
    <script src="<?=$admin_assets?>/vendors/DataTables/datatables.min.js"></script>
    <script src="<?=$admin_assets?>/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <?php if($request === '/Admin/blog' || $request === '/Admin/event') : ?>
        <script src="<?=$admin_assets.'/vendors/ckeditor/ckeditor.js';?>"></script>
        <script src="<?=$admin_assets.'/js/form-editor.js';?>"></script>
    <?php endif;?>
    <script src="<?=$admin_assets.'/js/admin.js'?>"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="<?=$admin_assets.'/js/init/weather-init.js'?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="<?=$admin_assets.'/js/init/fullcalendar-init.js'?>"></script>

</body>

</html>