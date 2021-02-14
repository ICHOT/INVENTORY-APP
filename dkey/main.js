$(window).on('keydown',function(event)
  {
    if(event.keyCode==123)
    {
        alert('Mau ngapain mas?');
        return false;
    }
    else if(event.ctrlKey && event.shiftKey && event.keyCode==73)
    {
        alert('Mau ngapain mas?')
        return false;  //Prevent from ctrl+shift+i
    }
    else if(event.ctrlKey && event.keyCode==85)
    {
        alert('Mau ngapain mas?')
        return false;  //Prevent from ctrl+u
    }
    else if(event.ctrlKey && event.keyCode==83)
    {
        alert('Mau ngapain mas?')
        return false;  //Prevent from ctrl+u
    }
});