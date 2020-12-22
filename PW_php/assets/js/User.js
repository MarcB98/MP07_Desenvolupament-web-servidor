class User extends Uploadpicture {
  ClearMessages(input) {
    switch (input.name) {
      case "dni":
        document.getElementById(input.name).innerHTML = "";
        break;
      case "nombre":
        document.getElementById(input.name).innerHTML = "";
        break;
      case "apellido":
        document.getElementById(input.name).innerHTML = "";
        break;
      case "email":
        document.getElementById(input.name).innerHTML = "";
        break;
      case "user":
        document.getElementById(input.name).innerHTML = "";
        break;
      case "pass":
        document.getElementById(input.name).innerHTML = "";
        break;
      case "repass":
        document.getElementById(input.name).innerHTML = "";
        break;
    }
  }
}
