const validation = new JustValidate("#signup");

    validation
        .addField("#name", [
            {
                rule: "required",
                errorMessage: "Name is required"
            }
        ])
        .addField("#email", [
            {
                rule: "required",
                errorMessage: "Email is required"
            },
            {
                rule: "email",
                errorMessage: "Email is invalid"
            },
            {
                validator: (value) => () => {
                    return fetch("validate-email.php?email=" + 
                        encodeURIComponent(value))
                            .then(function(response){
                                return response.json();
                            })
                            .then(function(json){
                                return json.available;
                            });
                },
                errorMessage: "email is already taken"
            }
        ])
        .addField("#password", [
            {
                rule: "required",
                errorMessage: "Password is required"
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
        .onSuccess((event) => {
            console.log('Validation passed. Form is ready to be submitted.');
            // Submit the form if needed
            event.target.submit();
        });
