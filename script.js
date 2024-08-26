
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("filterDiv");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }
            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {
                        element.className += " " + arr2[i];
                    }
                }
            }
            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
            element.className = arr1.join(" ");
            }
            var btnContainer = document.getElementById("product-container");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
            new Vue({
                el: '#cart',
                data: {
                    cart: [], // Initialize cart array
                    total: 0    // Initialize total
                },
                mounted() {
                    this.fetchProducts(); // Fetch products when the component is mounted
                },
                methods: {
                    fetchProducts() {
                        fetch('fetch_products.php')
                            .then(response => response.json())
                            .then(data => {
                                this.cart = data; // Assign fetched data to cart array
                                this.calculateTotal(); // Calculate total after updating cart
                            })
                            .catch(error => console.error('Error fetching products:', error));
                    },
                    calculateTotal() {
                        this.total = this.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0); // Calculate total price
                    },
                    add(item) {
                        item.quantity++;
                        this.calculateTotal();
                    },
                    sub(item) {
                        if (item.quantity > 1) {
                            item.quantity--;
                            this.calculateTotal();
                        }
                    },
                    goToPayment() {
                        // Handle payment logic here
                        console.log('Redirecting to payment...');
                    }
                },
                filters: {
                    currency(value) {
                        return '$' + value.toFixed(2); // Format currency
                    }
                }
            });
            