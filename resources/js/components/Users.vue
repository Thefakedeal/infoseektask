<template lang="">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>DOB</th>
                <th>Education</th>
                <th>Mode Of Contact</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(user, index) in users" :key="index">
                <td scope="row">{{index}}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.gender }}</td>
                <td>{{ user.phone }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.address }}</td>
                <td>{{ user.nationality }}</td>
                <td>{{ user.dob }}</td>
                <td>{{ user.education }}</td>
                <td>{{ user.mode_of_contact }}</td>

            </tr>
        </tbody>
    </table>

</template>
<script>
export default {
    data(){
        return{
            users: [],
        }
    },
    methods:{
        async fetchUsers(){
            const response = await fetch('/api/client');
            if(response.ok){
                this.users = await response.json()
            }
        } 
    }
    ,
    mounted(){
        this.fetchUsers()
    }
}
</script>
<style lang="">
    
</style>