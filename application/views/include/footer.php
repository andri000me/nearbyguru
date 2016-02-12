</section>
</section>

<!--footer start-->
<footer class= "site-footer">
    <div class="text-center">
        2016 - Projek KP
        <a href="<?= $this->config->base_url('/index.php/') ?>" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>
</body>

<!-- js placed at the end of the document so the pages load faster -->
<script src='<?= $this->config->base_url("assets/js/jquery-1.8.3.min.js") ?>'></script>
<script src='<?= $this->config->base_url("assets/js/bootstrap.min.js") ?>'></script>
<script src='<?= $this->config->base_url("assets/js/bootstrap-datepicker.js") ?>'></script>
<script class="include" type="text/javascript" src='<?= $this->config->base_url("assets/js/jquery.dcjqaccordion.2.7.js") ?>'></script>
<script src='<?= $this->config->base_url("assets/js/jquery.scrollTo.min.js") ?>'></script>
<script src='<?= $this->config->base_url("assets/js/jquery.nicescroll.js") ?>' type="text/javascript"></script>
<script src='<?= $this->config->base_url("assets/js/jquery.sparkline.js") ?>'></script>
<script src="<?= $this->config->base_url() ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?= $this->config->base_url() ?>/assets/js/main.js"></script>

<!--common script for all pages-->
<script src='<?= $this->config->base_url("assets/js/common-scripts.js") ?>'></script>

<script type="text/javascript" src='<?= $this->config->base_url("assets/js/gritter/js/jquery.gritter.js") ?>'></script>
<script type="text/javascript" src='<?= $this->config->base_url("assets/js/gritter-conf.js") ?>'></script>
<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>


</html>