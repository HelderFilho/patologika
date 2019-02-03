<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versão</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Pagtran</a>.</strong> Todos os Direitos resevado.

    <?php //echo $this->element('sql_dump'); ?>
</footer>
<script type="text/javascript">
    $(function () {
        //Money Euro
        $("[data-mask]").inputmask();
    });
</script>
<?php
//scripts

echo $this->Html->script(array("jQuery-2.1.3.min.js",
    "bootstrap.min.js",
    '/plugins/input-mask/jquery.inputmask',
    '/plugins/input-mask/jquery.inputmask.date.extensions',
    '/plugins/input-mask/jquery.inputmask.extensions',
    "fastclick/fastclick.min",
    "app.min",
    "sparkline/jquery.sparkline.min",
    "jvectormap/jquery-jvectormap-1.2.2.min.js",
    "jvectormap/jquery-jvectormap-world-mill-en.js",
    "daterangepicker/daterangepicker",
    "datepicker/bootstrap-datepicker",
    "/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.js",
    "/plugins/iCheck/icheck.min",
    "slimScroll/jquery.slimscroll.min",
    "chartjs/Chart.min",
    "/plugins/auto-complete/jquery.tokeninput",
    'bootstrap-select', 'highlight', 'main', 'bootstrap-switch.min'
    // "demo.js"
));
echo $this->fetch('script');

?>
<script>
    $(document).ready(function () {
        if (Notification.permission !== "granted") {
            Notification.requestPermission();
        }

        var interval = 60000;  // 1000 = 1 second, 3000 = 3 seconds
        function doAjax() {
            $.ajax({
                async: false,
                type: 'POST',
                url: '/Pages/notification',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {

                    console.debug(data);
                    if (data) {
                        var title = $("title");
                        var n = title.html().indexOf(")");

                        title.html("("+data.contador+")"+title.html().substring(n+1));

                        if (Notification.permission === "granted") {
                            var e = new Notification("Atenção, Sistema PAGTRAN", {body : data.msg,sound: 'audio/alert.mp3',icon:window.location.origin + "/img/alert.png"});
                            e.onclick = function (event) {
                                event.preventDefault(); // prevent the browser from focusing the Notification's tab
                                window.open(window.location.origin, '_blank');
                            }
                            var audio = new Audio('audio/alert.mp3');
                            audio.play();
                        }
                    }
                },
                complete: function (data) {
                    // Schedule the next
                    setTimeout(doAjax, interval);
                }
            });
        }

        setTimeout(doAjax, interval);
    });
</script>