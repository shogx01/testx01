const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Initialize cartItems in localStorage
if (!localStorage.getItem('cartItems')) {
  localStorage.setItem('cartItems', JSON.stringify([]));
}

function addToCart(productName, price) {
  const quantityInput = document.getElementById(`quantity-${productName.replace(/\s/g, '').toLowerCase()}`);
  const quantity = parseInt(quantityInput.value);

  if (quantity > 0) {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    let found = false;

    cartItems.forEach(item => {
      if (item.productName === productName) {
        item.quantity += quantity;
        found = true;
      }
    });

    if (!found) {
      cartItems.push({ productName, price, quantity });
    }

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    displayCartItems();
  } else {
    alert('Please enter a valid quantity.');
  }
}

function displayCartItems() {
  const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  const cartList = document.getElementById('cart-items');
  let totalQuantity = 0;
  let totalPrice = 0;

  cartList.innerHTML = '';
  cartItems.forEach(item => {
    const li = document.createElement('li');
    li.innerHTML = `
      <div class="cart-item">
        <span>${item.productName}</span>
        <span>Quantity: ${item.quantity}</span>
        <span>Price: $${item.price * item.quantity}</span>
      </div>
    `;
    cartList.appendChild(li);
    totalQuantity += item.quantity;
    totalPrice += item.price * item.quantity;
  });

  const totalQuantityElement = document.getElementById('total-quantity');
  totalQuantityElement.textContent = `Total Quantity: ${totalQuantity}`;

  const totalPriceElement = document.getElementById('total-price');
  totalPriceElement.textContent = `Total Price: $${totalPrice.toFixed(2)}`;
}

function cancelCart() {
  localStorage.removeItem('cartItems');
  displayCartItems(); // Update the displayed cart after clearing
}

  