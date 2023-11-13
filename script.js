// Define basic animation effects using JavaScript
const menuItems = document.querySelectorAll('.menu-item');

menuItems.forEach((item, index) => {
  item.style.animation = `slideIn 0.5s ease-in-out ${index / 5}s`;
});
	