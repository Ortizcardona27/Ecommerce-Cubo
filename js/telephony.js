const stockProductos = [
  {
    id: 1,
    nombre: "Telephony 100 Minutes",
    cantidad: 1,
    desc: "WhatsApp + Twitter + 100 minutes.",
    precio: 9900,
    img: "img/telefono.png",
  },
  {
    id: 2,
    nombre: "Telephony 300 Minutes",
    cantidad: 1,
    desc: "WhatsApp + Twitter + Facebook + 300 minutes.",
    precio: 19900,
    img: "img/telefono.png",
  },
  {
    id: 3,
    nombre: "Telephony Unlimited",
    cantidad: 1,
    desc: "WhatsApp + Twitter + Facebook + Unlimited minutes.",
    precio: 23900,
    img: "img/telefono.png",
  },
  {
    id: 4,
    nombre: "Telephony Unlimited",
    cantidad: 1,
    desc: "All social networks + Unlimited minutes.",
    precio: 29900,
    img: "img/telefono.png",
  }
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
        title: "¡Your cart is empty!",
        text: "Buy something to continue shopping.",
        icon: "error",
        confirmButtonText: "Acept",
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
        
        <button class="btn btn-primary" onclick="agregarProducto(${id})">Buy Product</button>
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
          <p>Product: ${nombre}</p>
        <p>Price: ${precio}</p>
        <p>Amount :${cantidad}</p>
        <button class="btn btn-danger"  onclick="eliminarProducto(${id})">Delete Product</button>
          </div>
        </div>
        
    
        `;
    });
  }

  if (carrito.length === 0) {
    console.log("Nothing");
    modalBody.innerHTML = `
      <p class="text-center text-primary parrafo">¡you haven't added anything yet!</p>
      `;
  } else {
    console.log("Something");
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
      title: "¡You must fill in your name and email!",
      text: "Fill the form.",
      icon: "error",
      confirmButtonText: "Acept",
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
        btn.value = 'Finalize Purchase';
        alert('Email sent.');
      }, (err) => {
        btn.value = 'Finalize Purchase';
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
      alertExito.textContent = 'Purchase made correctly'
      formulario.appendChild(alertExito)

      setTimeout(() => {
        alertExito.remove()
      }, 3000)


    }, 3000)
  }
  localStorage.clear()

}