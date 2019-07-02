import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import products from './components/products';
import product from './components/product';
import cart from './components/cart';
import checkout from './components/checkout';
import e404 from './components/E404';
import submited from './components/submited';

import {store} from './store/index.js';

const routes = [
	{
		path: '',
		redirect: {name: 'products'}
	},
	{
		name: 'products',
		path: '/products',
		component: products,
	},
	{
		path: '/products/:id',
		component: product
	},
	{
		name: 'cart',
		path: '/cart',
		component: cart,
	},
	{
		name: 'checkout',
		path: '/checkout',
		component: checkout,
	},
	{
		name: 'submited',
		path: '/submited',
		component: submited,
	},
	{
		name: 'e404',
		path: '/*',
		component: e404,
	}
];

export const router = new VueRouter({
	routes,
	mode: 'history'
});