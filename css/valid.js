jQuery("#vd").validate({
  rules: {
    Full_Name: {
      required: true,
      minlength: 2,
    },
    Email_Id: {
      required: true,
      minlength: 2,
    },
    Phone_Number: {
      required: true,
      minlength: 10,
    },
    Password: {
      required: true,
      minlength: 5,
    },
  },
  messages: {
    Full_Name: {
      required: "Please enter your name",
      minlength: "Name atleast 2 character",
    },
    Email_Id: {
      required: "Please enter your valid email",
      minlength: "Enter valid email",
    },
    Phone_Number: {
      required: "Please enter your number",
      minlength: "atleast 10 number",
    },
    Password: {
      required: "Please enter your password",
      minlength: "Password must be 5 char long",
    },
  },
  submitHandler: function (form) {
    form.submit();
  },
});
