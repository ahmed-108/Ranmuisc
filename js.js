var name1 = document.getElementById("firstname"),
    name2= document.getElementById("lastname"),
    user1=document.getElementById("username"),
    email1=document.getElementById("email"),
    pas=document.getElementById("password"),
    pas2=document.getElementById("conpass");

    function showmesg(){
        if(name1.value ==""|| name1.value==null){
           name1.value="please enter your first name";
        }else if(name2.value==""||name2.value==null){
            name2.value="please enter your last name";
        }else if(user1.value==""||user1.value==null){
            swal("Erorr!", "Please Enter Your Username!","error")
        }else if(pas.value==""||pas.value==null){
            swal("Erorr!", "Please Enter Your Password!","error")
        }else if(pass2.value==""||pass2.value==null){
            swal("Erorr!", "Please Enter Your Password Again!","error")
        }else if(email1.value==""||email1.value==null){
            swal("Erorr!", "Please Enter Your Email!","error")
        }else if(pas.value!==pass2.value){
            swal("Erorr!", "The Password Isn't Matching!","error")
        }else if(pas.value.length <= 8){
            swal("Erorr!", "The Password is less than 8 characters long !","error")   
        }else{
            swal("Success", "Welcome "+name1.value+" In Our Site","success");
        }
        }
