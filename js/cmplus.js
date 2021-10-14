var barre_btn = document.querySelector('.barre_btn');
var menu = document.getElementById('menu');
barre_btn.addEventListener('click' , function()
                          {
    if(document.getElementById('menu'))
        {
            menu.setAttribute('id', 'menu_open');
        }
    else
        {
            menu.setAttribute('id', 'menu');
        }
});

// var effacer = document.getElementById('effacer');

// effacer.addEventListener('click', function()
// {
// 	var operande1 = document.getElementById('operande1');
// 	var operande2 = document.getElementById('operande2');
// });

