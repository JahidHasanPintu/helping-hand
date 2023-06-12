const validation = new JustValidate("#signup");

validation
    .addField("#name", [
        {
            rule: "required"
        }
    ])
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" + encodeURIComponent(value))
                       .then(function(response) {
                           return response.json();
                       })
                       .then(function(json) {
                           return json.available;
                       });
            },
            errorMessage: "email already taken"
        }
    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .addField("#password_confirmation", [
        {
            validator: (value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    var phone = document.getElementById("phone")

    phone.addEventListener('input',function(){
        if(phone.value.length>11 || phone.value.length<11){
            phone.style.color="red";
        }
        else{
            phone.style.color="black";
        }
    })
    .addField("#address", [
        {
            rule: "required"
        }
    ])

    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
