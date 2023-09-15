function confirmDelete(fileName) {
    if (confirm("¿Estás seguro de que deseas eliminar este archivo?")) {
        window.location.href = "delete.php?file=" + fileName;
    }
}