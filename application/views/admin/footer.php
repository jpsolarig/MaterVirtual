<footer class="footer">
    <div class="container">
        <p class="texto">Copyright © 2017 Colegio Mater Purissima</p>
    </div>
</footer>
<script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
<?php  foreach($jss as $js):?>
           <script type='text/javascript' src = '<?php echo  base_url($js);?>'></script>
<?php endforeach;?>



