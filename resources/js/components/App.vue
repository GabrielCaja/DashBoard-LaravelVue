<template>
    <h1>{{texto}}</h1>
    <div v-for="producto in productos">
        <p>{{producto.id}} - {{producto.title}}</p>
    </div>
</template>

<script> 
import axios from 'axios';
export default{
    data(){
        return  {
            texto: 'Hola Mundo',
            productos: []
        };
    },
    mounted(){
        this.obtenerProductos();
    },
    methods: {
        async obtenerProductos(){
            const response = await axios.get('/api/products');
            try {
                this.productos = response.data;
            } catch (error) {
                console.error(error);
            }
        },
    }
}
</script>
