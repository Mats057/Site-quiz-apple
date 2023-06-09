const changeThemeBtn = document.querySelector("#change-theme");

// Toggle dark mode
function toggleDarkMode() {
  document.querySelector(":root").classList.toggle("dark");
  document.querySelector("body").classList.toggle("dark");
}

// Load light or dark mode
function loadTheme() {
  const darkMode = localStorage.getItem("dark");

  if (darkMode === "1") {
    toggleDarkMode();
    if (document.location.pathname.endsWith("/conta.php")) {
      changeThemeBtn.checked = false;
    }
  }
}

loadTheme();

changeThemeBtn.addEventListener("change", function () {
  toggleDarkMode();

  // Save or remove dark mode from localStorage
  if (document.querySelector(":root").classList.contains("dark") && document.querySelector("body").classList.contains("dark")) {
    localStorage.setItem("dark", "1");
  } else {
    localStorage.removeItem("dark");
  }
});

