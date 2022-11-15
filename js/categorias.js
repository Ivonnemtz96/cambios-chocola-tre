categoria = [
    {
        id: "1",
        nombre: "Bombones",
        descripcion: "lorem",
      },
      {
        id: "2",
        nombre: "crema",
        descripcion: "lorem",
      },
      {
        id: "3",
        nombre: "moka",
        descripcion: "lorem",
      }

];



categoria.map(function(categoria){
    for(cat in categoria){
        document.getElementById(1).innerHTML = (categoria.nombre);
    }
    // console.log(categoria.nombre+" => "+categoria.id);
    // document.write(categoria.nombre+ "=> " +categoria.id);
   
});


