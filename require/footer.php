        </div>       
            <footer class="footer">
                <p class="text-muted text-center">2017 &copy; <a href="evenlight.team" class="copylink">evenlight</a></p>
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