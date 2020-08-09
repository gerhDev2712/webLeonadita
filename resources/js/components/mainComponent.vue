<template id="">

    <main class="col-sm-12 col-lg-7">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>@{{$data}}</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </main>
  
</template>

<script>
export default {
    name: '',
    created: function (){
        this.getUsers();
    },
    data: {
        users_content:[]
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