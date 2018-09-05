<template>    
    <div class="content-container">
        <div class="container bg-w box-shadow-code"  style="padding:0px !important">
            <div class="col-md-6" style="padding:0px !important;">
                <img src="public/img/polipangkep.png" alt="">
            </div>
            <div class="col-md-6" style="padding: 30px">
                <form v-on:submit="login()" class="form-horizontal" id="loginform" method="post">
                    <h3><i class="ti ti-user"></i> Sign in</h3> <br>
                    <div class="form-group">
                        <label for="nim">{{label}}</label>
                        <input type="text" v-model="data.username" id="nim" name="nim" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" v-model="data.password" id="password" name="password" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <p>Anda {{data.type}} ? <a @click="toggleForm()"> Masuk sebagai {{data.type}}</a></p>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p v-if="errors.length" class="bg-danger" style="padding:5px; border-radius:3px">
                    <b>Harap perbaiki kesalahan berikut:</b>
                    <ul style="list-style-type:circle">
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</template>
<script>
var axios = require('axios');

export default {
    data: function () {
        return {
            errors: [],
            isStudentFormActive: true,
            label: 'Nomer Induk Mahasiswa (NIM)',
            data: {
                type: 'dosen',
                username: '',
                password: ''
            }
        }
    },
    methods: {
        toggleForm() {
            var app = this;
            if (app.isStudentFormActive) {
                app.label = 'Username';
                app.isStudentFormActive = false;
                app.data.type = 'mahasiswa';
                return true;
            }
            
            app.label = 'Nomer Induk Mahasiswa (NIM)';
            app.isStudentFormActive = true;
            app.data.type = 'dosen';
            
        },
        login() {
            this.errors = [];
            event.preventDefault();
            this.validate();

            if (this.errors.length) {
                return true;
            }

            var data = this.data;
            axios.post('login', data).then(function (resp) {
                // if (resp.data.kuesioner == 0) {
                //     app.is_finish = true;
                //     return true;
                // }
                console.log(resp);                
            })
            .catch(function (resp) {
                alert("oops, something went wrong. Please try again!");
            });
        },
        validate() {
            var app = this;
            if (!app.data.username) app.errors.push(app.label + ' tidak boleh kosong');
            if (!app.data.password) app.errors.push('password tidak boleh kosong');
        },
    }
}
</script>
