<!-- Jquery -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
<!-- Slick -->
<script type="text/javascript" src="{{asset('assets/slick/slick.min.js')}}"></script>
<!-- Fancybox -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
crossorigin="anonymous"
></script>
<!-- JS -->
<script src="{{asset('assets/js/app.js')}}"></script>
<!--DNE-->
<script src="{{asset('js/public.js')}}"></script>
<script src="{{asset('js/ycommon.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>  
<script src="{{asset('js/front/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript">
function getCart(){
  ajaxifyN('','GET','{{route('cart.add.detail')}}').then(function(e){
    $('.nav_cart').find('.badge').html(e.count)
  })
}
(function($){
  $.fn.visible = function(partial){
      var $t        = $(this),
        $w        = $(window),
        viewTop     = $w.scrollTop(),
        viewBottom    = viewTop + $w.height(),
        _top      = $t.offset().top,
        _bottom     = _top + $t.height(),
        compareTop    = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;  
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
    };
})(jQuery);
$(document).ready(function(){
showvisible();
getCart()
$(window).scroll(function(){
        setTimeout(function(){ showvisible() }, 100);
    });
});
function showvisible(){
$('img').each(function(){
var visible = $(this).visible('partial');
var elem = $(this);
if (!elem.prop('complete')) {
  elem.on('load', function() {
    //console.log(this.complete);
  });
} else {
}
if(visible) { 
$(this).attr('src',$(this).data('url'));
}
});
}
function inquiry_error(res){
  if(res){
    if(isJSON(res)){
      res = JSON.parse(res);
      if(res.errors){
        var _errors='';
        for(j in res.errors){
          _errors+=res.errors[j].join('</br>')+'</br>';
        }
        generateNotification('0',_errors);
      }
    }
  }
}
function inquiry_success(_msg){
    if(_msg.status){
        generateNotification('1','Thank you! your message has been sent to admin.');
    $('#inquiry_form')[0].reset();
    }
}
</script>