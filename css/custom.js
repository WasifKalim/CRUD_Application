jQuery("#frm").validate({
  rules: {
    email: {
      required: true,
      minlength: 2,
    },
    password: {
      required: true,
      minlength: 5,
    },
  },
  messages: {
    email: {
      required: "Please enter your name",
      minlength: "Name atleast 2 character",
    },
    password: {
      required: "Please enter your password",
      minlength: "Password must be 5 char long",
    },
  },
  submitHandler: function (form) {
    form.submit();
  },
});
