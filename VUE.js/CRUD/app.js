const app = new Vue({
    el: '#app',
    data: {
        //titulos del proyecto
        titulo: 'CRUD con Vue.JS',
        tituloLista: 'Listado de de materias',
        //Variable para guardar la entrada de asignatura
        nombre: '',
        //variable para guardar la entradade calificacion
        calificacion: '',
        //estado se utiliza para validar si es aprovado o reprobado
        estado: 'alert alert-primary',
        //arreglo que contiene todas nuestras clificaciones
        materias: [
        ]

    },
    methods: {
        agregar(tipo) {
            //metodo push sirve para agregar un nuevo elemento al final del arreglo
            this.materias.push({
                _nombre: this.nombre, _calificacion: this.calificacion
            });
            this.calificacion = '';
            this.nombre = '';
            //mandomos el contenido del sitio al local storage 
            localStorage.setItem('db-materias',JSON.stringify(this.materias));
        },
        modificar() {
            localStorage.setItem('db-materias',JSON.stringify(this.materias));
        },
        eliminar(indice) {
            //El metodo Splice hace referencia a eliminar un elemento del arreglo 
            //splice(valor en el indice del elemento que se quiere eliminar,cantidad de elementos)
            this.materias.splice(indice, 1);
            localStorage.setItem('db-materias',JSON.stringify(this.materias));
        }

    },
    created: function () {
        //obtener todos los datos que se encuentan el local storage
        let obtDatos=JSON.parse(localStorage.getItem('db-materias'));
        console.log(obtDatos);
        //validamos si existe algo en el local storage
        if(obtDatos === null){
            this.materias=[];
        }else{
            this.materias=obtDatos;
        }
    }


});