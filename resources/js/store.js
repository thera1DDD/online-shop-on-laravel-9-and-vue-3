// store.js
import { createStore } from 'vuex';

export default createStore({
    state: {
        cart: [],
        cartItemCount: 0,
    },
    mutations: {
        addToCart(state, product) {
            const existingProduct = state.cart.find(p => p.id === product.id);
            if (existingProduct) {
                existingProduct.qty += product.qty;
                existingProduct.subtotal = existingProduct.price * existingProduct.qty;
            } else {
                state.cart.push(product);
            }
            state.cartItemCount += product.qty;
            localStorage.setItem('cart', JSON.stringify(state.cart));
        },

        loadCartFromLocalStorage(state) {
            const cart = JSON.parse(localStorage.getItem('cart'));
            if (cart) {
                state.cart = cart;
                state.cartItemCount = cart.reduce((total, product) => total + product.qty, 0);
            }
        },
    },
});
