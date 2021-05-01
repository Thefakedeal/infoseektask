<template lang="">
    <div class="card">
        <div class="card-body">
            <form  method="POST" @submit.prevent="postUser">
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text"
                        class="form-control" name="name" id="name" v-model="name" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender" v-model="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                        <option value="n/a">N/A</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="number">Phone</label>
                    <input type="tel"
                        class="form-control" name="phone" id="number" v-model="phone" size="10" maxlength="10" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text"
                        class="form-control" name="email" id="email" v-model="email" required>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" id="address" rows="3" v-model="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text"
                        class="form-control" name="nationality" id="nationality" v-model="nationality" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date"
                        class="form-control" name="dob" id="dob" v-model="dob" required>
                </div>
                <div class="form-group">
                    <label for="education">Education</label>
                    <input type="text"
                        class="form-control" name="education" id="education" v-model="education" required>
                </div>
                <div class="form-group">
                    <label for="mode_of_contact">Mode Of Contact</label>
                    <select class="form-control" name="mode_of_contact" id="mode_of_contact" v-model="mode_of_contact" required>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="none">None</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
        name:'',
        gender:'',
        phone:'',
        email:'',
        address:'',
        nationality:'',
        dob:'',
        education:'',
        mode_of_contact:'',
        }
    },
    methods:{
        postUser(){
            fetch('/api/client',{
                method: 'POST',
                body: JSON.stringify({...this.$data}),
                headers:{
                    'accept':'application/json',
                    'Content-Type': 'application/json',
                }
            }).then(async (response)=>{
                console.log(response.status)
                console.log(await response.json())
            })
        }
    },
}
</script>
<style lang="">
    
</style>