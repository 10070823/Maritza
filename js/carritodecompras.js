document.addEventListener('DOMContentLoaded', function () {
    // Simula obtener la cantidad de productos del carrito
    const cantidadProductos = 5; // Ejemplo: cambiar por datos dinámicos
    const cantidadCarrito = document.querySelector('.carrito .cantidad');
  
    if (cantidadProductos > 0) {
      cantidadCarrito.textContent = cantidadProductos;
    } else {
      cantidadCarrito.style.display = 'none';
    }
  });
  