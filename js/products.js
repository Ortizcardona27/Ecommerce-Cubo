const stockProductos = [
  {
    id: 1,
    nombre: "30GB",
    cantidad: 1,
    desc: "Unlimited minutes.",
    precio: 35000,
    img: "img/telefono.png",
  },
  {
    id: 2,
    nombre: "15GB",
    cantidad: 1,
    desc: "Unlimited minutes.",
    precio: 24900,
    img: "img/telefono.png",
  },
  {
    id: 3,
    nombre: "10GB",
    cantidad: 1,
    desc: "Unlimited minutes.",
    precio: 19900,
    img: "img/telefono.png",
  },
  {
    id: 4,
    nombre: "3.5GB",
    cantidad: 1,
    desc: "Unlimited minutes.",
    precio: 9900,
    img: "img/telefono.png",
  },
  {
    id: 5,
    nombre: "4GB of navigation",
    cantidad: 1,
    desc: "Telephony, internet and television.",
    precio: 79900,
    img: "img/planes.png",
  },
  {
    id: 6,
    nombre: "10GB of navigation",
    cantidad: 1,
    desc: "Telephony, internet and television.",
    precio: 99900,
    img: "img/planes.png",
  },
  {
    id: 7,
    nombre: "20GB of navigation",
    cantidad: 1,
    desc: "Telephony, internet and television. Includes repeaters.",
    precio: 140900,
    img: "img/planes.png",
  },
  {
    id: 8,
    nombre: "30GB of navigation",
    cantidad: 1,
    desc: "Telephony, fiber optic Internet and satellite television. Includes repeaters.",
    precio: 200900,
    img: "img/planes.png",
  },
];
let carrito = [];

const contenedor = document.querySelector("#contenedor");
const carritoContenedor = document.querySelector("#carritoContenedor");
const vaciarCarrito = document.querySelector("#vaciarCarrito");
const precioTotal = document.querySelector("#precioTotal");
const activarFuncion = document.querySelector("#activarFuncion");
const procesarCompra = document.querySelector("#procesarCompra");
const totalProceso = document.querySelector("#totalProceso");
const formulario = document.querySelector('#procesar-pago')

if (activarFuncion) {
  activarFuncion.addEventListener("click", procesarPedido);
}

document.addEventListener("DOMContentLoaded", () => {
  carrito = JSON.parse(localStorage.getItem("carrito")) || [];

  mostrarCarrito();
  document.querySelector("#activarFuncion").click(procesarPedido);
});
if (formulario) {
  formulario.addEventListener('submit', enviarCompra)
}


if (vaciarCarrito) {
  vaciarCarrito.addEventListener("click", () => {
    carrito.length = [];
    mostrarCarrito();
  });
}

if (procesarCompra) {
  procesarCompra.addEventListener("click", () => {
    if (carrito.length === 0) {
      Swal.fire({
        title: "¡Tu carrito está vacio!",
        text: "Compra algo para continuar con la compra",
        icon: "error",
        confirmButtonText: "Aceptar",
      });
    } else {
      location.href = "buy.html";
    }
  });
}

stockProductos.forEach((prod) => {
  const { id, nombre, precio, desc, img, cantidad } = prod;
  if (contenedor) {
    contenedor.innerHTML += `
    <div class="card mt-3" style="width: 18rem; text-align: center">
      <div class="card-body">
        <h5 class="card-title">${nombre}</h5>
        <br>
        <img class="card-img-top mt-2" src="${img}" alt="Card image cap">
        <br><br>
        <p class="card-text">${desc}</p>        
        <p class="card-text">$ ${precio}</p>
        
        <button class="btn btn-primary" onclick="agregarProducto(${id})">BUY PRODUCT</button>
      </div>
    </div>
      `;
  }
});

//<p class="card-text">${cantidad}</p>

const agregarProducto = (id) => {
  const existe = carrito.some(prod => prod.id === id)

  if (existe) {
    const prod = carrito.map(prod => {
      if (prod.id === id) {
        prod.cantidad++
      }
    })
  } else {
    const item = stockProductos.find((prod) => prod.id === id)
    carrito.push(item)
  }
  mostrarCarrito()

};

const mostrarCarrito = () => {
  const modalBody = document.querySelector(".modal .modal-body");
  if (modalBody) {
    modalBody.innerHTML = "";
    carrito.forEach((prod) => {
      const { id, nombre, precio, desc, img, cantidad } = prod;
      console.log(modalBody);
      modalBody.innerHTML += `
        <div class="modal-contenedor">
          <div>
          <img class="img-fluid img-carrito" src="${img}"/>
          </div>
          <div>
          <p>Producto: ${nombre}</p>
        <p>Precio: ${precio}</p>
        <p>Cantidad :${cantidad}</p>
        <button class="btn btn-danger"  onclick="eliminarProducto(${id})">Eliminar producto</button>
          </div>
        </div>
        
    
        `;
    });
  }

  if (carrito.length === 0) {
    console.log("Nada");
    modalBody.innerHTML = `
      <p class="text-center text-primary parrafo">¡Aun no agregaste nada!</p>
      `;
  } else {
    console.log("Algo");
  }
  carritoContenedor.textContent = carrito.length;

  if (precioTotal) {
    precioTotal.innerText = carrito.reduce(
      (acc, prod) => acc + prod.cantidad * prod.precio,
      0
    );
  }

  guardarStorage();
};

function guardarStorage() {
  localStorage.setItem("carrito", JSON.stringify(carrito));
}

function eliminarProducto(id) {
  const juegoId = id;
  carrito = carrito.filter((juego) => juego.id !== juegoId);
  mostrarCarrito();
}
function procesarPedido() {
  carrito.forEach((prod) => {
    const listaCompra = document.querySelector("#lista-compra tbody");
    const { id, nombre, precio, img, cantidad } = prod;
    if (listaCompra) {
      const row = document.createElement("tr");
      row.innerHTML += `
                <td>
                <img class="img-fluid img-carrito" src="${img}"/>
                </td>
                <td>${nombre}</td>
              <td>${precio}</td>
              <td>${cantidad}</td>
              <td>${precio * cantidad}</td>
              `;
      listaCompra.appendChild(row);
    }
  });
  totalProceso.innerText = carrito.reduce(
    (acc, prod) => acc + prod.cantidad * prod.precio,
    0
  );
}

function enviarCompra(e) {
  e.preventDefault()
  const cliente = document.querySelector('#cliente').value
  const email = document.querySelector('#correo').value

  if (email === '' || cliente == '') {
    Swal.fire({
      title: "¡Debes completar tu email y nombre!",
      text: "Rellena el formulario",
      icon: "error",
      confirmButtonText: "Aceptar",
    })
  } else {

    const btn = document.getElementById('button');

    // document.getElementById('procesar-pago')
    //  .addEventListener('submit', function(event) {
    //    event.preventDefault();

    btn.value = 'Enviando...';

    const serviceID = 'default_service';
    const templateID = 'template_qxwi0jn';

    emailjs.sendForm(serviceID, templateID, this)
      .then(() => {
        btn.value = 'Finalizar compra';
        alert('Correo enviado!');
      }, (err) => {
        btn.value = 'Finalizar compra';
        alert(JSON.stringify(err));
      });

    const spinner = document.querySelector('#spinner')
    spinner.classList.add('d-flex')
    spinner.classList.remove('d-none')

    setTimeout(() => {
      spinner.classList.remove('d-flex')
      spinner.classList.add('d-none')
      formulario.reset()

      const alertExito = document.createElement('p')
      alertExito.classList.add('alert', 'alerta', 'd-block', 'text-center', 'col-12', 'mt-2', 'alert-success')
      alertExito.textContent = 'Compra realizada correctamente'
      formulario.appendChild(alertExito)

      setTimeout(() => {
        alertExito.remove()
      }, 3000)


    }, 3000)
  }
  localStorage.clear()

}