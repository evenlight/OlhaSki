        </div>   
            <footer class="footer">
                <div class="text-center">
                    <!-- uSocial -->
                    <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
                    <div class="uSocial-Share" data-pid="5b754275fca259b27ec1ddc93e84d375" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size48,eachCounter0,counter0" data-social="vk,fb,ok,twi" data-mobile="vi,wa,sms"></div>
                    <!-- /uSocial -->
                </div>
                <p class="text-muted text-center"><?php echo date("Y") ?> &copy; <a href="evenlight.team" class="copylink">evenlight</a></p>
            </footer>
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../content/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
        });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script>
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
  </script>
    <script>
        $(window).on('load', function () {
            var $preloader = $('#preloader'),
            $spinner   = $preloader.find('.spinner');
            $spinner.fadeOut();
            $preloader.delay(350).fadeOut('slow');
        });
    </script>
  </body>
</html>