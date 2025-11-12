document.addEventListener("DOMContentLoaded", () => {
  const passField = document.getElementById("pass");
  const viewButton = document.getElementById("viewPass");
  const icon = document.getElementById("viewIcon");

  viewButton.addEventListener("click", () => {
    const isHidden = passField.type === "password";
    passField.type = isHidden ? "text" : "password";

    icon.classList.toggle("viewing", isHidden);
    icon.src = isHidden
      ? "./assets/images/view.png"
      : "./assets/images/unview.png";

    viewButton.setAttribute("aria-checked", isHidden);
  });
});
