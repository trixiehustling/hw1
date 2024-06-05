document.addEventListener('DOMContentLoaded', function() {
    fetch('get_products.php')
        .then(response => response.json())
        .then(data => {
            const productsDiv = document.getElementById('products');
            data.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('product');
                productDiv.innerHTML = `
                    <img src="${product.image_url}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <p>€${product.price}</p>
                    <button onclick="addToCart(${product.id})">Aggiungi al Carrello</button>
                    <button onclick="addToFavorites(${product.id})">Aggiungi ai Preferiti</button>
                `;
                productsDiv.appendChild(productDiv);
            });
        });
});

function addToCart(productId) {
    fetch('add_to_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ product_id: productId })
    }).then(response => response.json())
      .then(data => alert(data.message));
}

function addToFavorites(productId) {
    fetch('add_to_favorites.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ product_id: productId })
    }).then(response => response.json())
      .then(data => alert(data.message));
}
