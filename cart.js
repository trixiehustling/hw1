function toggleSelectAll(section) {
    const checkboxes = document.querySelectorAll(`#${section} input[type="checkbox"]`);
    const selectAllButton = document.querySelector(`button[onclick="toggleSelectAll('${section}')"]`);
    const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);

    checkboxes.forEach(checkbox => {
        checkbox.checked = !allChecked;
    });

    selectAllButton.textContent = allChecked ? 'Seleziona Tutti' : 'Deseleziona Tutti';
}
