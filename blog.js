//FOR THE BLOG PAGE

// Track the current page
let currentPage = 1;
    
// Select page elements
const page1 = document.getElementById("page1");
const page2 = document.getElementById("page2");
const page3 = document.getElementById("page3");
const next = document.getElementById("next");
const blogBoxes = document.querySelectorAll(".blog-box");

// Function to update active page
function updatePagination() {
    // Reset all page links
    page1.classList.remove("active");
    page2.classList.remove("active");
    page3.classList.remove("active");

    // Highlight the current page and update links
    if (currentPage === 1) {
        page1.classList.add("active");
    } else if (currentPage === 2) {
        page2.classList.add("active");
    } else if (currentPage === 3) {
        page3.classList.add("active");
    }

    // Show only items for the current page (assuming 5 items per page)
    blogBoxes.forEach((box, index) => {
        if (currentPage === 1 && index < 5) {
            box.style.display = "flex";
        } else if (currentPage === 2 && index >= 5 && index < 10) {
            box.style.display = "flex";
        } else if (currentPage === 3 && index >= 10) {
            box.style.display = "flex";
        } else {
            box.style.display = "none";
        }
    });
}

// Page click handlers
page1.addEventListener("click", (event) => {
    event.preventDefault();
    currentPage = 1;
    updatePagination();
    // Load content for page 1 here
});

page2.addEventListener("click", (event) => {
    event.preventDefault();
    currentPage = 2;
    updatePagination();
    // Load content for page 2 here
});

page3.addEventListener("click", (event) => {
    event.preventDefault();
    currentPage = 3;
    updatePagination();
});

next.addEventListener("click", (event) => {
    event.preventDefault();
    currentPage = currentPage === 3 ? 1 : currentPage + 1;
    updatePagination();
    // Load content for the current page here
});

// Initial page load
updatePagination();