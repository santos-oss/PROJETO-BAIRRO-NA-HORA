var TypeCheckbox;

function Change(Selecionado)
{
    if(Selecionado === 1)
    {
        document.querySelector("#AnuncioI").checked = false;
        document.querySelector("#EventoI").checked = false;
    
        TypeCheckbox.value = Selecionado;
    }
    
    if(Selecionado === 2)
    {
        document.querySelector("#NoticiaI").checked = false;
        document.querySelector("#EventoI").checked = false;
    
        TypeCheckbox.value = Selecionado;
    }
    
    if(Selecionado === 3)
    {
        document.querySelector("#NoticiaI").checked = false;
        document.querySelector("#AnuncioI").checked = false;
    
        TypeCheckbox.value = Selecionado;
    }
}