 <script src="js/funciones.js"></script>

 <!-- JQuery v1.11.3 -->
 <!-- <script src="js/jquery.min.js"></script> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

 <!-- FOTORAMA -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

 <!-- Library - Js -->
 <script src="libraries/lib.js"></script>
 <!-- Bootstrap JS File v3.3.5 -->

 <!-- Library - Google Map API -->
 <script src="../../maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>

 <!-- Library - Theme JS -->
 <script src="js/functions.js"></script>
 
 <!-- magnific popup -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/jquery.magnific-popup.min.js"></script>

<!-- Triger js -->
<script src="//cdn.jsdelivr.net/npm/@triggerjs/trigger" defer></script>

 <script>
    $(document).ready(function() {

        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }
        });
    });
</script>