

window.Vue = require('vue');





Vue.component('example-component', require('./components/ExampleComponent.vue').default);







if(document.getElementById('app')){

    const app = new Vue({

        el: '#app',

    });

    

}
 


if(document.getElementById('apinoticia')){

    require('./admin/apinoticia');   

}





if(document.getElementById('confirmareliminar')){

    require('./confirmareliminar');

}

