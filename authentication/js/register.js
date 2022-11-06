$(document).ready(function () {


    // Cheking Username already exist or not

    $("#username").blur(function () {

        usernameCheck();


    });

    // Cheking Email already exist or not

    $("#email").blur(function () {


        emailCheck();


    });

    // Cheking Password Strength

    $("#password").blur(function () {

        passwordCheck();

    });

    // Submit button

    $("#submitBtn").click(function () { 
       
        let FlagUsername =  usernameCheck();
        let FlagEmail = emailCheck();
        let FlagPassword = passwordCheck();
        // console.log(FlagPassword, FlagEmail, FlagUsername);
        if(FlagUsername != 0 && FlagEmail != 0 && FlagPassword != 0 ){
    
           console.log("error");

        }
        else{
            let Username = $("#username").val();
            let Email = $("#email").val();
            let Password = $("#password").val();

            $.ajax({
                type: "POST",
                url: "code.php",
                data: {RegisterForm:"1", Username: Username, Email: Email, Password: Password},
                cache: false,
                beforeSend: function () {
                    $("#loading").attr('hidden', false);
                    console.log('running...');
                },
                complete: function () {
                    
                    $("#loading").attr('hidden', true);
                    $("#EmailPrompt").attr('hidden', false);
                    console.log('stop');
                },
                success: function (response) {
                    console.log(response);
                },
                
            });

        }

    
    });





    function addInValid(id, errorText) {
        $(id).addClass("is-invalid");
        $(errorText).addClass("invalid-feedback");

    }
    function addValid(id, errorText) {
        $(id).addClass("is-valid");
        $(errorText).addClass("valid-feedback");

    }

    function removeInvalid(id, errorText) {

        $(id).removeClass("is-invalid");
        $(errorText).removeClass("invalid-feedback");

    }

    function removeValid(id, errorText) {

        $(id).removeClass("is-valid");
        $(errorText).removeClass("valid-feedback");

    }

    function usernameCheck() {

        let id = '#username';
        let errorText = '#errorUsername';

        let username = $(id).val();

        if (username.length == 0) {
            addInValid(id, errorText);
            $(errorText).text("username cannot empty");
            return 1;
        }
        else {

            let check = $.ajax({
                type: "POST",
                url: "code.php",
                global: false,
                async:false,
                data: { username: username },
                success: function (response) {

                    if (response == 0) {
                        removeValid(id, errorText)
                        removeInvalid(id, errorText);
                        addValid(id, errorText)
                        $(errorText).text('');
                        return 0;
                    }
                    else {
                        removeInvalid(id, errorText);
                        removeValid(id, errorText)
                        addInValid(id, errorText)
                        $(errorText).text(response);
                        return 1;
                    }

                }
            }).responseText;
            return check;
        }



    }

    function emailCheck() {
        let id = '#email';
        let errorText = '#errorEmail';
        let email = $('#email').val();
        if (email.length == 0) {

            addInValid(id, errorText);
            $(errorText).text("email cannot empty");
            return 1;
        }
        else {

           let check = $.ajax({
                type: "POST",
                url: "code.php",
                global: false,
                async:false,
                data: { Email: email },
                success: function (response) {
                    
                    console.log(response);
                    if (response == 0) {
                        removeValid(id, errorText)
                        removeInvalid(id, errorText);
                        addValid(id, errorText)
                        $(errorText).text('');
                        return 0;
                    }
                    else {
                        removeInvalid(id, errorText);
                        removeValid(id, errorText)
                        addInValid(id, errorText)
                        $(errorText).text(response);
                        return 1;
                    }

                }
            }).responseText;

            return check;
        }

    }

    function passwordCheck() {

        let id = '#password';
        let errorText = '#errorPassword';

        let Password = $(id).val();
        if (Password.length == 0) {

            addInValid(id, errorText);
            $(errorText).text("password cannot empty");
            return 1;
        }
        else {


            let regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m;
            if (!regex.test(Password)) {

                $("#errorPassword").text("Password not strong");
                removeInvalid(id, errorText);
                removeValid(id, errorText)
                addInValid(id, errorText)
                return 0;

            }
            else {
                $("#errorPassword").text("");
                removeValid(id, errorText)
                removeInvalid(id, errorText);
                addValid(id, errorText)
                $(errorText).text('');
                return 1;
            }
        }

    }





});