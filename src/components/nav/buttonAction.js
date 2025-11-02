export function initButtonAction() {
  const buttons = document.querySelectorAll(".navButtons");
  if (!buttons || buttons.length === 0) return;

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      buttons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
    });
  });
}

export default initButtonAction;
