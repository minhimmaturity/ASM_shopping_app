function navBar() {
  const devicesList = ["Smart Phone", "Laptop", "Fan", "Air Conditional"];
  const brandList = ["Apple", "Samsung", "Dell", "Casper"];

  function getDropdown(
    name = "",
    data = ["Smart Phone", "Laptop", "Fan", "Air Conditional"]
  ) {
    const dropdown = document.createElement("div");
    const dropdownBtn = document.createElement("button");
    dropdown;
    dropdownBtn.classList.add("dropbtn");
    dropdownBtn.innerHTML = name;
    const dropdown_content = document.createElement("div");
    dropdown_content.classList.add("dropdown-content");
    dropdown.appendChild(dropdownBtn);

    data.forEach((item) => {
      const dropdownItem = document.createElement("label");
      dropdownItem.innerHTML = item;
      dropdownItem.classList.add("dropdownItem");
      dropdown_content.appendChild(dropdownItem);
    });
    dropdown.appendChild(dropdown_content);

    return dropdown;
  }

  const navBarContainer = document.createElement("div");
  navBarContainer.classList.add("navBar");

  const logoContainer = document.createElement("div");
  logoContainer.classList.add("logoContainer");
  const logo = document.createElement("img");
  logo.src = "";
  logoContainer.appendChild(logo);

  const dropdownContainer = document.createElement("div");
  dropdownContainer.classList.add("dropdownContainer");
  navBarContainer.appendChild(getDropdown("Devices", devicesList));

  const inputForm = document.createElement("div");
  inputForm.classList.add("inputForm");
  const $input = document.createElement("input");
  $input.type = "text";
  const search_icon = document.createElement("img");
  search_icon.src = "";
  inputForm.appendChild($input);
  inputForm.appendChild(search_icon);

  const customerAreaContainer = document.createElement("div");
  customerAreaContainer.classList.add("customerAreaContainer");
  const user_icon = document.createElement("img");
  user_icon.src = "";
  const shopping_cart_icon = document.createElement("img");
  shopping_cart_icon.src = "";
  customerAreaContainer.appendChild(user_icon);
  customerAreaContainer.appendChild(shopping_cart_icon);
}
