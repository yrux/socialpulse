<script type="text/javascript">
var app = new Vue({
  el: '#cartapp',
  data: {
    cart: [],
    coupon_code: '',
  },
  methods:{
      async couponApply(){
          if(this.coupon_code!=''){
            this.cart = await ajaxify({
                code: this.coupon_code
            },'POST','{{route('cart.coupon.apply')}}')
            getCart()
          }
      },
      async getCart(){
        this.cart = await ajaxifyN('','GET','{{route('cart.add.detail')}}');
      },
      async lessQty(obj){
        if(parseInt(obj.qty)>1){
            obj.qty--;
            await this.$nextTick();
            this.cart = await ajaxify({
                qty: obj.qty
            },'POST','{{route('cart.update.qty')}}/'+obj.product.slug)
            getCart()
        }
      },
      async addQty(obj){
        obj.qty++;
        await this.$nextTick();
        this.cart = await ajaxify({
              qty: obj.qty
        },'POST','{{route('cart.update.qty')}}/'+obj.product.slug)
        getCart()
      }
  },
  mounted(){
      this.getCart();
  },
  computed: {
      productTotal(){
        return parseFloat(this.cart.total).toFixed(2)

      },
      productSubTotal(){
          return parseFloat(this.cart.subtotal).toFixed(2)
      }
  }
})
</script>