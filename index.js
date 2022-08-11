const toggleElement = (buttonId, elementId) => {
  const btn = document.getElementById(buttonId);
  const element = document.getElementById(elementId);
  btn.addEventListener("click", () => {
    if (element.style.visibility == "unset") {
      element.style.visibility = "hidden";
    } else {
      element.style.visibility = "unset";
    }
  });
};

toggleElement("deviceDropdownBtn", "deviceDropdownContent");
toggleElement("brandDropdownBtn", "brandDropdownContent");



