<template id="">

    <main>
        <div class="jumbotron" id="bg">
            <h1 class="display-4">Leonardita Engine</h1>
            <p class="lead">Un proyecto realizado durante la pandemia del sars-covid-19 por estudiantes de la Facultad de Ingeniería y para la comunidad.</p>
            <a class="btn btn-primary btn-lg mt-2 mb-2" href="#" role="button">Más sobre el proyecto</a>
            <hr>

            <ul class="list-group mt-2">
                <li class="list-group-item active">Lista de usuarios.</li>
                <span v-for="(item, index) in users_content" :key="index">
                    <li class="list-group-item">{{item.id}}: {{item.nombre_usuario}}</li>
                </span>
            </ul>

        </div>
    </main>
  
</template>

<script>
export default {
    name: '',
    created: function (){
        this.getUsers();
    },
    data() {
        return {
            users_content:[]
        }
    },
    methods: {
        getUsers: function(){
            var urlUsers = 'users';
            axios.get(urlUsers).then(response =>{
                this.users_content = response.data;
            });
        }
    }

}
</script>

<style>

</style>