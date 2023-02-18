function Validator() {
   return "";
}

Validator.isEmail = function (value) {
   const regex =
      /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
   return regex.test(value) ? undefined : "Your email is not correct" || "Please enter your email";
};

Validator.isPassword = function (value) {
   if (value.length == "") return "Please enter your password";
   return value.length < 6 ? "Your password must contain at least 6 characters" : undefined;
};

Validator.isBlank = function (value) {
   return value ? undefined : "Please fill the blank!";
};
