var url='TraerTodo.php';
var List=new Array();
let out='';

class Noticia{
    constructor(Titulo,Copete,NoticiaCompleta,Id,Imagen){
        this.Titulo=Titulo;
        this.Copete=Copete;
        this.NoticiaCompleta=NoticiaCompleta;
        this.Id=Id;
        this.Imagen=Imagen;
    }
}


function TraerNoticias(index)
{
    fetch(url)
        .then(res=> res.json())
        .then(data =>{
            console.log(data);
            data.forEach(dato => {
                NoticiaNueva = new Noticia(dato.Titulo,dato.Copete,dato.NoticiaCompleta,dato.id,dato.Imagen);
                List.push(NoticiaNueva);
            });
            switch(index)
            {
                case 1:LlenarInicio();
            }
            
        }).catch(error=>console.log(error));
}


function LlenarInicio()
{
    List.forEach(Noticia=>{
            out += `<img class="card-img-top" src="${Noticia.Imagen}" alt="">
                    <div class="card-body">
                      <h4 class="card-title">${Noticia.Titulo}</h4>
                      <p class="card-text">${Noticia.Copete}</p>
                    </div>
                    <div class="card-footer">
                      <a href="ObtenerNoticia.php?id=${Noticia.Id}" class="btn btn-primary">Ver mas!</a>
                    </div>`;
            document.querySelector('.card').innerHTML=out;
    })  
}


