console.log(message);
function message(e) {
  e.preventDefaults();
  let Name = document.getElementById("name");
  let email = document.getElementById("email");
  let msg = document.getElementById("message");
  let tel = document.getElementById("phone");

  const success = document.getElementById("submitSuccessMessage");
  const danger = document.getElementById("submitErrorMessage");

  if (
    Name.value === "" ||
    email.value === "" ||
    msg.value === "" ||
    tel.value === ""
  ) {
    danger.style.display = "block";
  } else {
    setTimeout(() => {
      Name.value = "";
      email.value = "";
      msg.value = "";
      tel.value = "";
    }, 2000);

    success.style.display = "block";
  }

  setTimeout(() => {
    danger.style.display = "none";
    success.style.display = "none";
  }, 4000);
}
