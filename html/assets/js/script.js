//  Nav bar background color change on scroll
document.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar')
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
})





// Product Details Page galery image change

// Get all product thumbnail images
const thumbnails = document.querySelectorAll('.product-thumbnail');

// Get the main product image
const mainImage = document.getElementById('main-product-image');

// Add click event listeners to each thumbnail
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
        // Set the main product image source to the clicked thumbnail's source
        mainImage.src = thumbnail.src;
    });
});

// ========================== add to cart page 4.1 ========================

//  ========================= increment or decrement cart items 4.1 ==================

function incrementQuantity(button) {
    var input = button.parentNode.querySelector('.quantity-input');
    input.value = parseInt(input.value) + 1;
}

function decrementQuantity(button) {
    var input = button.parentNode.querySelector('.quantity-input');
    if (parseInt(input.value) > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function removeFromCart(button) {
    var cartItem = button.parentNode;
    cartItem.parentNode.removeChild(cartItem);
}




//====================   checkbox selection  4.1=====================


// Get the checkbox element
var selectAllCheckbox = document.getElementById('selectAll');

// Get all the item checkboxes
var itemCheckboxes = document.querySelectorAll('.item-checkbox');

// Add event listener to the selectAll checkbox
selectAllCheckbox.addEventListener('click', function () {
    // Loop through all item checkboxes
    itemCheckboxes.forEach(function (checkbox) {
        // Set the checked property of each item checkbox to match the selectAll checkbox
        checkbox.checked = selectAllCheckbox.checked;
    });
});

// =============  this code can be written to deleted the only selected items ==============

document.addEventListener('DOMContentLoaded', function () {
    // Selecting relevant elements
    const deleteButton = document.getElementById('deleteButton');
    const checkboxes = document.querySelectorAll('.item-checkbox');
    const cardContainer = document.getElementById('cardContainer');

    // Event listener for delete button
    deleteButton.addEventListener('click', function () {
        // Show confirmation dialog
        const confirmDelete = confirm('Are you sure you want to delete selected items?');
        if (confirmDelete) {
            // Loop through each checkbox
            checkboxes.forEach(checkbox => {
                // If checkbox is checked, remove its corresponding card item
                if (checkbox.checked) {
                    // Remove the closest card item to the checkbox
                    const cardItem = checkbox.closest('.card');
                    cardItem.remove();
                }
            });
            // Trigger change event to update order summary if needed
            // (assuming the order summary is updated when checkboxes are checked/unchecked)
        }
    });
});

// =====// this code can be written to add 200 rupess will add in every order(doesnt matter how many products you can order.200 rupess will charge in each other this is delivery) ==================


document.addEventListener('DOMContentLoaded', function () {
    // Selecting relevant elements
    const checkboxes = document.querySelectorAll('.item-checkbox');
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const totalPriceElement = document.getElementById('totalPrice');
    const deliveryChargesElement = document.getElementById('deliveryCharges');
    const totalAmountElement = document.getElementById('totalAmount');

    const deliveryCharges = 200; // Set delivery charges

    // Function to calculate total price
    function calculateTotalPrice() {
        let totalPrice = 0;
        checkboxes.forEach((checkbox, index) => {
            if (checkbox.checked) {
                // Parsing price as a float
                const price = parseFloat(checkbox.dataset.price) || 0;
                // Adding the price multiplied by the quantity
                const quantity = parseInt(quantityInputs[index].value) || 0;
                totalPrice += price * quantity;
            }
        });
        return totalPrice;
    }

    // Function to update total price, delivery charges, and total amount
    function updateOrderSummary() {
        const totalPrice = calculateTotalPrice();
        const totalAmount = totalPrice + deliveryCharges;
        totalPriceElement.textContent = `RS ${totalPrice}`;
        deliveryChargesElement.textContent = `RS ${deliveryCharges}`;
        totalAmountElement.textContent = `RS ${totalAmount}`;
    }

    // Event listeners for quantity inputs and checkboxes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateOrderSummary);
    });
    quantityInputs.forEach(input => {
        input.addEventListener('change', updateOrderSummary);
    });

    // Initial update of order summary
    updateOrderSummary();
});

// =========================== section 4.1 ============================

document.addEventListener('DOMContentLoaded', function () {
    // Selecting relevant elements
    const selectAllCheckbox = document.getElementById('selectAll');
    const deleteButton = document.getElementById('deleteButton');
    const checkboxes = document.querySelectorAll('.item-checkbox');

    // Event listener for delete button
    deleteButton.addEventListener('click', function () {
        // Uncheck all checkboxes
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        // Trigger change event to update order summary
        checkboxes[0].dispatchEvent(new Event('change'));
    });

    // Event listener for select all checkbox
    selectAllCheckbox.addEventListener('change', function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
        // Trigger change event to update order summary
        checkboxes[0].dispatchEvent(new Event('change'));
    });
});