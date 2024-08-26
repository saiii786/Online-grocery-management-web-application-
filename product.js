new Vue({
    el: '#app',
    data: {
        cart: JSON.parse(localStorage.getItem('cart')) || []
    },
    methods: {
        add(item) {
            item.quantity++;
            this.updateCart();
        },
        sub(item) {
            if (item.quantity > 1) {
                item.quantity--;
            } else {
                this.cart = this.cart.filter(cartItem => cartItem.name !== item.name);
            }
            this.updateCart();
        },
        updateCart() {
            localStorage.setItem('cart', JSON.stringify(this.cart));
        }
    },
    computed: {
        total() {
            return this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
        }
    },
    filters: {
        currency(value) {
            return '₹' + value.toFixed(2);
        }
    }
});