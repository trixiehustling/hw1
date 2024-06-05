function openModal(orderId, orderTotal) {
    var modal = document.getElementById('orderModal');
    modal.style.display = 'block';
    var modalContent = modal.querySelector('.modal-content');
    
    fetch('order_details.php?orderId=' + orderId)
        .then(response => response.text())
        .then(data => {
            modalContent.innerHTML = data + '<p><strong>Totale Ordine: €' + orderTotal + '</strong></p><span class="close" onclick="closeModal()">&times;</span>';
        });
}

function closeModal() {
    var modal = document.getElementById('orderModal');
    modal.style.display = 'none';
}

window.onclick = function(event) {
    var modal = document.getElementById('orderModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
