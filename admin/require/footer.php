</div>   
    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../content/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
        $('a[href*="' + this.location.pathname.split('/')[2] + '"]').parent().addClass('active');
        });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script>

$(".nav a").on("click", function(){
  $(".nav").find(".active").removeClass("active");
  $(this).parent().addClass("active");
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
    <script src="../../content/js/image-compressor.js"></script>
    <script>
        // import ImageCompressor from 'image-compressor.js';
        // var imgInput = document.getElementById('img');
        // if (imgInput) {
        //     imgInput.addEventListener('change', (e) => {
        //     const file = e.target.files[0];

        //     if (!file) {
        //         return;
        //     } 

        //     new ImageCompressor(file, {
        //         quality: .6,
        //         success(result) {
        //           const formData = new FormData();

        //           formData.append('file', result, result.name);
        //           $.ajax({
        //             url: 'upload_img.php',
        //             data: formData,
        //             processData: false,
        //             contentType: false,
        //             type: 'POST',
        //             success: function(data){
        //               console.log('success!');
        //             }
        //           });
        //         },
        //         error(e) {
        //             console.log(e.message);
        //         },
        //     });
        // });
        // }
        </script>
  </body>
</html>