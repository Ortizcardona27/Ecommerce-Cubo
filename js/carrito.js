export function procesarPedido() {
  carrito.forEach((prod) => {
    const contenedorCompra = document.querySelector('#contenedorCompra')
    const { id, nombre, precio, desc, img, cantidad } = prod;
    const div = document.createElement("div");
    div.innerHTML += `
            <div class="modal-contenedor">
              <div>
              <img style="width: 100px;" class="img-fluid img-carrito" src="${img}"/>
              </div>
              <div>
              <p>Product: ${nombre}</p>
            <p>Price: ${precio}</p>
            <p>Amount :${cantidad}</p>
            <button class="btn btn-danger"  onclick="eliminarProducto(${id})">Delete Product</button>
              </div>
            </div>
            `;
    contenedorCompra.appendChild(div);
    console.log(contenedorCompra);
  });
}