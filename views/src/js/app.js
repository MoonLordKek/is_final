const botonMenu = document.getElementById("btn-menu");
const nav = document.getElementById("nav");
const backMenu = document.getElementById("backmenu");
const body = document.querySelector("body");
const botonInformacion = document.getElementById('boton-mostrar-info');
const valorTranstorno = document.getElementById('trastornos');
const trastornoEstres = document.getElementById('trastorno-estres');
const trastornoAnsiedad = document.getElementById('trastorno-ansiedad');
const trastornoDepresion = document.getElementById('trastorno-depresion');
const trastornoAutoestima = document.getElementById('trastorno-autoestima');



function mostrarMenu()
{
    nav.style.right = "0rem";
    backMenu.style.display = "block";
    body.style.overflow ="hidden";
}

function ocultarMenu()
{
    nav.style.right = "-25rem";
    backMenu.style.display = "none";
    body.style.overflow ="scroll";
}

function mostrarInformacion()
{
    if(valorTranstorno.value == "estres")
    {
        trastornoAnsiedad.style.display = 'none';
        trastornoDepresion.style.display = 'none';
        trastornoAutoestima.style.display = 'none';
        trastornoEstres.style.display = 'block';
        location.hash = "#" + "trastorno-estres";
        
    }
    else if (valorTranstorno.value == "ansiedad")
    {
        trastornoEstres.style.display = 'none';
        trastornoDepresion.style.display = 'none';
        trastornoAutoestima.style.display = 'none';
        trastornoAnsiedad.style.display = 'block';
        location.hash = "#" + "trastorno-ansiedad";
        
    }
    else if (valorTranstorno.value == "depresion")
    {
        trastornoEstres.style.display = 'none';
        trastornoAnsiedad.style.display = 'none';
        trastornoAutoestima.style.display = 'none';
        trastornoDepresion.style.display = 'block';
        location.hash = "#" + "trastorno-depresion";
        
    }
    else if (valorTranstorno.value == "autoestima")
    {
        trastornoEstres.style.display = 'none';
        trastornoAnsiedad.style.display = 'none';
        trastornoDepresion.style.display = 'none';
        trastornoAutoestima.style.display = 'block';
        location.hash = "#" + "trastorno-autoestima";
        
    }
    else
    {
        alert("no entro")
    }
}

botonMenu.addEventListener("click", mostrarMenu);
backMenu.addEventListener("click", ocultarMenu);
botonInformacion.addEventListener("click", mostrarInformacion);