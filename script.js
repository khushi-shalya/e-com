//SHOW MENU
const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close');

/*===== Menu Show =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
    });
}

/*===== Hide Show =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    });
}

//IMAGE GALLERY

function imgGallery() {
    const mainImg = document.querySelector('.details__img'),
    smallImg = document.querySelectorAll('.details__small-img');

    smallImg.forEach((img) => {
        img.addEventListener('click', function () {
            mainImg.src = this.src;
            });
        });
    }

imgGallery();


//SWIPER CATEGORIES
var swiperCategories=new Swiper('.categories__container',{
    spaceBetween: 24,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        350: {
            slidesPerView: 2,
            spaceBetween: 24,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 24,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 6,
            spaceBetween: 24,
        },
    },
});

//SWIPER PRODUCTS
var swiperProduct=new Swiper('.new__container',{
    spaceBetween: 24,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 24,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 24,
        },
    },
});


/*Products tabs*/
const tabs = document.querySelectorAll('[data-target]'),
tabContents = document.querySelectorAll('[content]');
tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.target);
        tabContents.forEach((tabContent) => {
            tabContent.classList.remove('active-tab');
        }); 
        target.classList.add('active-tab');
        tabs.forEach((tab) => {
            tabs.classList.remove('active-tab');
        }); 
        tab.classList.add('active-tab');
    });
});

//ADDITIONAL INFO AND REVIEW SECTION
function toggleTabs() {
    const tabs = document.querySelectorAll('.detail__tab'); // Select all tabs

    tabs.forEach((tab) => {
        tab.addEventListener('click', function () {
            // Remove 'active-tab' class from all tabs
            tabs.forEach((t) => t.classList.remove('active-tab'));

            // Add 'active-tab' class to the clicked tab
            this.classList.add('active-tab');
        });
    });
}

toggleTabs();

//MY ACCOUNT ACTIVE TAB TOGGLE

document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.account__tab');
    const tabContents = document.querySelectorAll('.tab__content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active-tab'));
            tabContents.forEach(content => content.classList.remove('active-tab'));

            // Add active class to the clicked tab
            tab.classList.add('active-tab');

            // Show corresponding tab content
            const targetId = tab.getAttribute('data-target');
            const targetContent = document.querySelector(targetId);

            if (targetContent) {
                targetContent.classList.add('active-tab');
            }
        });
    });
});


//INDEX PAGE FOR TOGGLING BETWEEN FEATURES POPULAR AND NEW ARRIVAL ITEMS
// Select all tab buttons
const tabButtons = document.querySelectorAll('.tab__btn');

// Add click event to each button
tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove 'active-tab' class from all buttons
        tabButtons.forEach(btn => btn.classList.remove('active-tab'));

        // Add 'active-tab' class to the clicked button
        button.classList.add('active-tab');
    });
});


//ADDING A REVIEW
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('review-form'); // Form element
    const reviewsContainer = document.querySelector('.reviews__container'); // Reviews container
    const stars = document.querySelectorAll('#rating-stars i'); // Star elements
    let selectedRating = 0; // Selected rating value

    // Handle star rating selection
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            selectedRating = index + 1; // Update selected rating (index starts from 0)

            // Highlight the selected stars
            stars.forEach((s, i) => {
                if (i < selectedRating) {
                    s.classList.add('active-star'); // Highlight stars up to the selected rating
                } else {
                    s.classList.remove('active-star'); // Remove highlight for unselected stars
                }
            });
        });
    });

    // Handle form submission
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        // Validate that a rating is selected
        if (selectedRating === 0) {
            alert('Please select a star rating before submitting your review.');
            return;
        }

        // Get input values
        const name = document.getElementById('reviewer-name').value.trim();
        const comment = document.getElementById('review-comment').value.trim();
        const date = new Date().toLocaleString(); // Current date and time

        // Validate input fields
        if (!name || !comment) {
            alert('Please fill in all the fields before submitting your review.');
            return;
        }

        // Create a new review element
        const newReview = document.createElement('div');
        newReview.classList.add('review__single');

        // Dynamically generate the star ratings
        let starHtml = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= selectedRating) {
                starHtml += '<i class="fi fi-rs-star active-star"></i>'; // Active star
            } else {
                starHtml += '<i class="fi fi-rs-star"></i>'; // Inactive star
            }
        }

        // Construct the new review's HTML
        newReview.innerHTML = `
            <div>
                <img src="img/default-avatar.jpg" alt="User Avatar" class="review__img">
                <h4 class="review__title">${name}</h4>
            </div>
            <div class="review__data">
                <div class="review__rating">${starHtml}</div>
                <p class="review__description">${comment}</p>
                <span class="review__date">${date}</span>
            </div>
        `;

        // Append the new review to the reviews container
        reviewsContainer.appendChild(newReview);

        // Clear the form and reset stars
        form.reset();
        stars.forEach(s => s.classList.remove('active-star')); // Remove all active highlights
        selectedRating = 0; // Reset selected rating
    });
});


var swiper = new Swiper(".teachers-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 3,
        },
      },
});

//CART PAGE
// ADDING THE PRODUCTS TO THE CART

document.addEventListener('DOMContentLoaded', () => {
    const cartCountElement = document.getElementById('cartCount'); // Assuming cart count is displayed in a span with id 'cartCount'

    // Function to update the cart count
    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartCount = cart.reduce((total, item) => total + item.quantity, 0); // Sum all item quantities
        if (cartCountElement) {
            cartCountElement.textContent = cartCount; // Update cart count in the header
        }
    }

    // Call updateCartCount on page load
    updateCartCount();

    // Adding items to the cart
    const cartButtons = document.querySelectorAll('.cart__btn');
    cartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();

            // Get the product container
            const product = button.closest('.product__item');
            if (!product) {
                console.error('Product container not found!');
                return;
            }

            // Extract product details
            const productId = product.getAttribute('data-id');
            const productName = product.getAttribute('data-name');
            const productPrice = product.getAttribute('data-price');
            const productImage = product.getAttribute('data-image');

            if (!productId || !productName || !productPrice || !productImage) {
                console.error('Missing product data:', { productId, productName, productPrice, productImage });
                alert('Product data is incomplete. Cannot add to cart.');
                return;
            }

            const cartItem = {
                id: productId,
                name: productName,
                price: parseFloat(productPrice),
                image: productImage,
                quantity: 1,
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingItemIndex = cart.findIndex(item => item.id === productId);

            if (existingItemIndex === -1) {
                cart.push(cartItem); // Add new item to the cart
            } else {
                cart[existingItemIndex].quantity += 1; // Increment quantity if item already exists
            }

            localStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart to localStorage
            updateCartCount(); // Update cart count after adding
            alert(`${productName} added to cart!`);
        });
    });

    // Updating the cart on the cart page
    const cartItemsContainer = document.getElementById('cart-items');
    const subtotalContainer = document.getElementById('cart-subtotal');
    const totalContainer = document.getElementById('total');

    if (cartItemsContainer) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        function renderCart() {
            cartItemsContainer.innerHTML = '';
            let total = 0;

            cart.forEach((item, index) => {
                const itemSubtotal = item.price * item.quantity;
                total += itemSubtotal;

                const row = document.createElement('tr');
                row.innerHTML = `
                    <th><a href="#" class="remove-item" data-index="${index}"><i class="far fa-times-circle"></i></a></th>
                    <th><img src="${item.image}" alt="${item.name}" width="150"></th>
                    <th>${item.name}</th>
                    <th>₹${item.price}</th>
                    <th><input type="number" min="1" value="${item.quantity}" class="quantity" data-index="${index}"></th>
                    <th class="item-subtotal">₹${itemSubtotal.toFixed(2)}</th>
                `;
                cartItemsContainer.appendChild(row);
            });

            subtotalContainer.textContent = total.toFixed(2);
            totalContainer.textContent = total.toFixed(2);
        }

        function updateLocalStorage() {
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        cartItemsContainer.addEventListener('input', (event) => {
            if (event.target.classList.contains('quantity')) {
                const index = event.target.getAttribute('data-index');
                cart[index].quantity = parseInt(event.target.value);
                updateLocalStorage();
                renderCart();
                updateCartCount(); // Update count when quantity changes
            }
        });

        cartItemsContainer.addEventListener('click', (event) => {
            if (event.target.closest('.remove-item')) {
                const index = event.target.closest('.remove-item').getAttribute('data-index');
                cart.splice(index, 1);
                updateLocalStorage();
                renderCart();
                updateCartCount(); // Update count after removal
            }
        });

        renderCart();
    }
});


// UPDATING THE TOTAL IN THE CART

document.addEventListener('DOMContentLoaded', () => {
    const cartItemsContainer = document.getElementById('cart-items');
    const subtotalContainer = document.getElementById('cart-subtotal');
    const totalContainer = document.getElementById('total');

    // Load cart from Local Storage
    
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Render cart items in the table
    function renderCart() {
        cartItemsContainer.innerHTML = '';
        let total = 0;

        cart.forEach((item, index) => {
            const itemSubtotal = item.price * item.quantity;
            total += itemSubtotal;

            const row = document.createElement('tr');
            row.innerHTML = `
                <th><a href="#" class="remove-item" data-index="${index}"><i class="far fa-times-circle"></i></a></th>
                <th><img src="${item.image}" alt="${item.name}" width="150"></th>
                <th>${item.name}</th>
                <th>₹${item.price}</th>
                <th><input type="number" min="1" value="${item.quantity}" class="quantity" data-index="${index}"></th>
                <th class="item-subtotal">₹${itemSubtotal.toFixed(2)}</th>
            `;
            cartItemsContainer.appendChild(row);
        });

        // Update cart subtotal and total
        subtotalContainer.textContent = total.toFixed(2);
        totalContainer.textContent = total.toFixed(2);
    }

    // Update Local Storage whenever cart changes
    function updateLocalStorage() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Handle quantity change
    cartItemsContainer.addEventListener('input', (event) => {
        if (event.target.classList.contains('quantity')) {
            const index = event.target.getAttribute('data-index');
            cart[index].quantity = parseInt(event.target.value);
            updateLocalStorage();
            renderCart();
        }
    });

    // Handle item removal
    cartItemsContainer.addEventListener('click', (event) => {
        if (event.target.closest('.remove-item')) {
            const index = event.target.closest('.remove-item').getAttribute('data-index');
            cart.splice(index, 1);
            updateLocalStorage();
            renderCart();
        }
    });

    renderCart();
});


//COMPARE PAGE

document.addEventListener("DOMContentLoaded", () => {
    const compareButtons = document.querySelectorAll(".compare__btn");

    compareButtons.forEach(button => {
        button.addEventListener("click", event => {
            event.preventDefault();
            const productItem = button.closest(".product__item");

            // Extract product details
            const productId = productItem.getAttribute("data-id");
            const productName = productItem.getAttribute("data-name");
            const productPrice = productItem.getAttribute("data-price");
            const productImage = productItem.getAttribute("data-image");
            const productStock = productItem.getAttribute("data-avaiable");

            // Create an object for the product
            const productDetails = {
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage,
                stock: productStock,
                description: "This is a sample product description.", // Add more details as required
            };

            // Save to localStorage
            let compareItems = JSON.parse(localStorage.getItem("compareItems")) || [];
            const isAlreadyAdded = compareItems.some(item => item.id === productId);

            if (!isAlreadyAdded) {
                compareItems.push(productDetails);
                localStorage.setItem("compareItems", JSON.stringify(compareItems));
                alert(`${productName} added to comparison list!`);
            } else {
                alert(`${productName} is already in the comparison list.`);
            }
        });
    });

    // Script to populate the Compare page and add clearing functionality
    const compareTableBody = document.getElementById("compareTableBody");
    const clearButton = document.getElementById("clearCompareList");

    // Function to populate the table
    const populateTable = () => {
        let compareItems = JSON.parse(localStorage.getItem("compareItems")) || [];

        compareTableBody.innerHTML = ""; // Clear existing rows

        if (compareItems.length > 0) {
            compareItems.forEach(product => {
                const row = document.createElement("tr");

                row.innerHTML = `
                    <td><img src="${product.image}" alt="${product.name}" width="250"></td>
                    <td>${product.name}</td>
                    <td>₹${product.price}</td>
                    <td>${product.description}</td>
                    <td>${product.stock}</td>
                    <td><button class="add-to-cart-btn btn btn--sm" data-id="${product.id}">Add to Cart</button></td>
                    <td><button class="remove-btn" data-id="${product.id}"><i class="far fa-times-circle"></i></button></td>
                `;

                compareTableBody.appendChild(row);
            });
        } else {
            compareTableBody.innerHTML = `<tr><td colspan="10">No items to compare.</td></tr>`;
        }
    };

    // Initial table population
    populateTable();

    // Clear all items logic
    clearButton.addEventListener("click", () => {
        localStorage.removeItem("compareItems"); // Clear localStorage
        compareTableBody.innerHTML = `<tr><td colspan="10">No items to compare.</td></tr>`; // Update table
        alert("Comparison list cleared!");
    });

    // Handle removing individual items
    compareTableBody.addEventListener("click", event => {
        if (event.target.closest(".remove-btn")) {
            const productId = event.target.closest(".remove-btn").getAttribute("data-id");

            // Get compare items from localStorage
            let compareItems = JSON.parse(localStorage.getItem("compareItems")) || [];

            // Remove the product from the compare list
            compareItems = compareItems.filter(item => item.id !== productId);

            // Update localStorage and re-render the table
            localStorage.setItem("compareItems", JSON.stringify(compareItems));
            populateTable();
        }
    });

    // Handle "Add to Cart" functionality
    compareTableBody.addEventListener("click", event => {
        if (event.target.closest(".add-to-cart-btn")) {
            const productId = event.target.getAttribute("data-id");

            // Get compare items from localStorage
            const compareItems = JSON.parse(localStorage.getItem("compareItems")) || [];
            const productToAdd = compareItems.find(item => item.id === productId);

            if (productToAdd) {
                // Get current cart from localStorage
                let cart = JSON.parse(localStorage.getItem("cart")) || [];
                const existingItemIndex = cart.findIndex(item => item.id === productToAdd.id);

                if (existingItemIndex === -1) {
                    // Add new product to cart
                    cart.push({ ...productToAdd, quantity: 1 });
                } else {
                    // Increment quantity if the product already exists in the cart
                    cart[existingItemIndex].quantity += 1;
                }

                // Update localStorage with the new cart
                localStorage.setItem("cart", JSON.stringify(cart));
                alert(`${productToAdd.name} added to cart!`);
            } else {
                alert("Failed to add the product to the cart. Please try again.");
            }
        }
    });
});

//WISHLIST CART

document.addEventListener("DOMContentLoaded", () => {
    const wishlistCountElement = document.querySelector('.header__action-btn .count');

    // Function to update the wishlist count
    const updateWishlistCount = () => {
        const wishlistItems = JSON.parse(localStorage.getItem("wishlistItems")) || [];
        wishlistCountElement.textContent = wishlistItems.length; // Update the count in the header
    };

    // Call updateWishlistCount on page load to ensure the count is correct
    updateWishlistCount();

    // Logic to handle adding items to the wishlist
    const wishlistButtons = document.querySelectorAll(".wishlist__btn");
    wishlistButtons.forEach(button => {
        button.addEventListener("click", event => {
            event.preventDefault();
            const productItem = button.closest(".product__item");

            // Extract product details
            const productId = productItem.getAttribute("data-id");
            const productName = productItem.getAttribute("data-name");
            const productPrice = productItem.getAttribute("data-price");
            const productImage = productItem.getAttribute("data-image");
            const productStock = productItem.getAttribute("data-avaiable");

            const productDetails = {
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage,
                stock: productStock,
            };

            // Save to localStorage
            let wishlistItems = JSON.parse(localStorage.getItem("wishlistItems")) || [];
            const isAlreadyAdded = wishlistItems.some(item => item.id === productId);

            if (!isAlreadyAdded) {
                wishlistItems.push(productDetails);
                localStorage.setItem("wishlistItems", JSON.stringify(wishlistItems));
                updateWishlistCount(); // Update count after adding
                alert(`${productName} added to wishlist!`);
            } else {
                alert(`${productName} is already in the wishlist.`);
            }
        });
    });

    // Populate the wishlist table if on wishlist page
    const wishlistTableBody = document.getElementById("wishlistTableBody");
    if (wishlistTableBody) {
        const populateTable = () => {
            let wishlistItems = JSON.parse(localStorage.getItem("wishlistItems")) || [];
            wishlistTableBody.innerHTML = ""; // Clear existing rows

            if (wishlistItems.length > 0) {
                wishlistItems.forEach(product => {
                    const row = document.createElement("tr");

                    row.innerHTML = `
                        <td><img src="${product.image}" alt="${product.name}" width="250"></td>
                        <td>${product.name}</td>
                        <td>₹${product.price}</td>
                        <td>${product.stock}</td>
                        <td><button class="add-to-cart-btn btn btn--sm" data-id="${product.id}">Add to Cart</button></td>
                        <td><button class="trash-btn" data-id="${product.id}"><i class="far fa-times-circle"></i></button></td>
                    `;

                    wishlistTableBody.appendChild(row);
                });
            } else {
                wishlistTableBody.innerHTML = `<tr><td colspan="10">No items in Wishlist.</td></tr>`;
            }
        };

        populateTable();

        // Handle removing items from the wishlist
        wishlistTableBody.addEventListener("click", event => {
            if (event.target.closest(".trash-btn")) {
                const productId = event.target.closest(".trash-btn").getAttribute("data-id");
                let wishlistItems = JSON.parse(localStorage.getItem("wishlistItems")) || [];

                // Remove item and update localStorage
                wishlistItems = wishlistItems.filter(item => item.id !== productId);
                localStorage.setItem("wishlistItems", JSON.stringify(wishlistItems));

                populateTable();
                updateWishlistCount(); // Update count after removing
            }
        });

        // Handle adding items to the cart
        wishlistTableBody.addEventListener("click", event => {
            if (event.target.closest(".add-to-cart-btn")) {
                const productId = event.target.getAttribute("data-id");
                let wishlistItems = JSON.parse(localStorage.getItem("wishlistItems")) || [];
                const productToAdd = wishlistItems.find(item => item.id === productId);

                if (productToAdd) {
                    let cart = JSON.parse(localStorage.getItem("cart")) || [];
                    const existingItemIndex = cart.findIndex(item => item.id === productToAdd.id);

                    if (existingItemIndex === -1) {
                        // Add new product to cart
                        cart.push({ ...productToAdd, quantity: 1 });
                    } else {
                        // Increment quantity if the product is already in the cart
                        cart[existingItemIndex].quantity += 1;
                    }

                    // Update localStorage with the new cart
                    localStorage.setItem("cart", JSON.stringify(cart));
                    alert(`${productToAdd.name} added to cart!`);
                } else {
                    alert("Failed to add the product to the cart. Please try again.");
                }
            }
        });
    }

    // If the clear button exists, handle clearing the wishlist
    const clearBtn = document.getElementById("clearwishList");
    if (clearBtn) {
        clearBtn.addEventListener("click", () => {
            localStorage.removeItem("wishlistItems");
            alert("Wishlist cleared!");

            if (wishlistTableBody) {
                wishlistTableBody.innerHTML = `<tr><td colspan="10">No items in Wishlist.</td></tr>`;
            }

            updateWishlistCount(); // Reset the count
        });
    }
});

//CHECKOUT PAGE

document.addEventListener('DOMContentLoaded', () => {
    const checkoutTable = document.getElementById('checkoutTable');
    const checkoutSubtotal = document.getElementById('checkoutSubtotal');
    const checkoutTotal = document.getElementById('checkoutTotal');
    const checkoutShipping = document.getElementById('checkoutShipping');

    // Load cart from localStorage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to render the cart in the checkout table
    function renderCheckout() {
        let subtotal = 0;

        // Clear any existing rows
        checkoutTable.querySelectorAll('tr:not(:first-child)').forEach(row => row.remove());

        // Add rows for each cart item
        cart.forEach(item => {
            const row = document.createElement('tr');
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            row.innerHTML = `
                <td><img src="${item.image}" alt="${item.name}" class="order__img"></td>
                <td>
                    <h3 class="table__title">${item.name}</h3>
                    <p class="table__quantity">x ${item.quantity}</p>
                </td>
                <td><span class="table__price">₹${itemTotal.toFixed(2)}</span></td>
            `;
            checkoutTable.appendChild(row);
        });

        // Update totals
        checkoutSubtotal.textContent = `₹${subtotal.toFixed(2)}`;
        checkoutTotal.textContent = `₹${subtotal.toFixed(2)}`;
    }

    renderCheckout();
});

