# Laravel package - skills<br>
* optimized for Vue.js & Bulma


### Install
``` bash
composer require vilbur/skills @dev
```

### Publish files
``` bash
php artisan vendor:publish --tag="vilbur/skills'"
```

### app.js
``` javascript

// import vilbur-skills view
const Skills	= () => import('./skills/views/skills.vue');

// routes for vue-router
const router = new VueRouter({
	routes:{
		path:	'/skills',
		name:	'skills',
		component:	Skills
	},
});
```

### app.scss
``` scss
@import 'skills/skills.scss';
```

