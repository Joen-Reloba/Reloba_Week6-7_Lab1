const clientBtn = document.getElementById("clientBtn");
const bookBtn = document.getElementById("bookBtn");
const dashboardLink = document.getElementById("dashboardLink");
const clientLink = document.getElementById("clientsLink");
const bookingsLink = document.getElementById("bookingsLink");
const servicesLink = document.getElementById("servicesLink");
const toolsLink = document.getElementById("toolsLink");

clientBtn.addEventListener("click", () => {
  alert("Add New Client button clicked!");
});

bookBtn.addEventListener("click", () => {
  alert("Create Bookings button clicked!");
});

dashboardLink.addEventListener("click", () => {
  alert("Dashboard Link Clicked");
});

clientLink.addEventListener("click", () => {
  alert("Clients Link Clicked");
});

bookingsLink.addEventListener("click", () => {
  alert("Bookings Link Clicked");
});

servicesLink.addEventListener("click", () => {
  alert("Services Link Clicked");
});

toolsLink.addEventListener("click", () => {
  alert("Tools Link Clicked");
});
