window.Vue = require("vue");
// import VueRouter from "vue-router";

import Vue from "vue";
import axios from "axios";
// import swal from "sweetalert";
import jquery from "jquery";

const showBlogApp = new Vue({
    el:"#user_profile",
    data(){
        return{
           
            getUserprofileData : {},
            getEducation : {},
             errors : {},
            }
       
    },
    mounted: function mounted() {
        this.userProfile();
        this.userEducation();
    },
    methods:{
        userProfile:function userProfile(){
            var _this = this;
            // axios
            //     .get("/userprofile_getdata")                                                                                                                                                                                                      
            //     .then(response => {
            //         _this.getUserprofileData = response.data;
            //         console.log( _this.getBlogsData);
            //     })
            //     .catch(error => {
            //         console.log(error);
            //         if (error.response.status === 422) {
            //             this.errors = error.response.data.errors || {};
            //         }
            //     });
		},
		update:function(){
            // alert('click me');
            var _this = this;
            var first_name =  $("#first_name").val();
            var last_name = $("#last_name").val();
            var email_id = $("#email_id").val();
            var phone_no = $("#phone_no").val();
			var dob = $("#dob").val();
			var gender = $("#gender").val();
            var time_zone = $("#timezone").val();
           
            
            axios
            .post("/updateUserprofile",{
                first_name:first_name,
                last_name:last_name,
                email_id:email_id,
                phone_no:phone_no,
				date_of_birth:dob,
				gender:gender,
				time_zone:time_zone
            })
            .then(response => {
                swal("Update Successfully", "", "success");
            })
            .catch(error => {
                console.log(error);
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });
        },
        changePassword:function(){
            // alert('click me');
            
            var _this = this;
            var txtNewPassword1 =  $("#txtNewPassword1").val();
            var confirm_password =  $("#txtNewPassword2").val();
           
           
            axios
            .post("/changePassword",{
                password:txtNewPassword1,
                password_confirmation:confirm_password
            })
            .then(response => {
            
               $("#txtNewPassword1").val('');
               $("#txtNewPassword2").val('');
               this.errors = {} ;
            //    alert('Password change successfully');
            swal("Password Changed Successfully", "", "success");
            })
            .catch(error => {
               
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                    // console.log(this.errors);
                }
            });
        },


        // user education detail


        education:function(){
            
            var _this = this;
            var school =  $("#school").val();
            var board = $("#board").val();
            var class_name = $("#class_name").val();
            var year_passing = $("#year_passing").val();
            var father_name = $("#father_name").val();
            var father_profession = $("#father_profession").val();
            var mother_name = $("#mother_name").val();
            var mother_profession = $("#mother_profession").val(); 
            var current_subject1 = $("#current_subject2").val();
            var current_subject2 = $("#current_subject3").val();
            var current_subject3 = $("#current_subject1").val();
            var current_subject4 = $("#current_subject4").val();
            var current_subject5 = $("#current_subject5").val();
            var current_subject6 = $("#current_subject6").val();
            
            var current_marks1 = $("#current_marks1").val();
            var current_marks2 = $("#current_marks2").val();
            var current_marks3 = $("#current_marks3").val();
            var current_marks4 = $("#current_marks4").val();
            var current_marks5 = $("#current_marks5").val();
            var current_marks6 = $("#current_marks6").val();
            
            var current_img = $("#current_img").val();

            var previous_subject1 = $("#previous_subject1").val();
            var previous_subject2 = $("#previous_subject2").val();
            var previous_subject3 = $("#previous_subject3").val();
            var previous_subject4 = $("#previous_subject4").val();
            var previous_subject5 = $("#previous_subject5").val();
            var previous_subject6 = $("#previous_subject6").val();

            var previous_marks1 = $("#previous_marks1").val();
            var previous_marks2 = $("#previous_marks2").val();
            var previous_marks3 = $("#previous_marks3").val();
            var previous_marks4 = $("#previous_marks4").val();
            var previous_marks5 = $("#previous_marks5").val();
            var previous_marks6 = $("#previous_marks6").val();

            var previous_img = $("#previous_img").val();


            axios
            .post("/userEducation",{
                school:school,
                board:board,
                class_name:class_name,
                year_passing:year_passing,
                father_name:father_name,
                father_profession:father_profession,
                mother_name:mother_name,
                mother_profession:mother_profession,
                current_subject1:current_subject1,
                current_marks1:current_marks1,
                current_subject2:current_subject2,
                current_marks2:current_marks2,
                current_subject3:current_subject3,
                current_marks3:current_marks3,
                current_subject4:current_subject4,
                current_marks4:current_marks4,
                current_subject5:current_subject5,
                current_marks5:current_marks5,
                current_subject6:current_subject6,
                current_marks6:current_marks6,
                current_img:current_img,
                previous_subject1:previous_subject1,
                previous_marks1:previous_marks1,
                previous_subject2:previous_subject2,
                previous_marks2:previous_marks2,
                previous_subject3:previous_subject3,
                previous_marks3:previous_marks3,
                previous_subject4:previous_subject4,
                previous_marks4:previous_marks4,
                previous_subject5:previous_subject5,
                previous_marks5:previous_marks5,
                previous_subject6:previous_subject6,
                previous_marks6:previous_marks6,
                previous_img:previous_img
            })
            .then(response => {

                swal("insert Successfully", "", "success");
            $("#school").val('');
            $("#board").val('');
            $("#class_name").val('');
            $("#year_passing").val('');
            $("#father_name").val('');
            $("#father_profession").val('');
            $("#mother_name").val('');
            $("#mother_profession").val(''); 
            $("#current_subject2").val('');
            $("#current_subject3").val('');
            $("#current_subject1").val('');
            $("#current_subject4").val('');
            $("#current_subject5").val('');
            $("#current_subject6").val('');
            
            $("#current_marks1").val('');
            $("#current_marks2").val('');
            $("#current_marks3").val('');
            $("#current_marks4").val('');
            $("#current_marks5").val('');
            $("#current_marks6").val('');

            $("#previous_subject1").val('');
            $("#previous_subject2").val('');
            $("#previous_subject3").val('');
            $("#previous_subject4").val('');
            $("#previous_subject5").val('');
            $("#previous_subject6").val('');

            $("#previous_marks1").val('');
            $("#previous_marks2").val('');
            $("#previous_marks3").val('');
            $("#previous_marks4").val('');
            $("#previous_marks5").val('');
            $("#previous_marks6").val('');
                
            })
            .catch(error => {
                console.log(error);
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            }); 
        }
     
       
    }
});