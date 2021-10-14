const btn = document.querySelector('#btn');
const pass = document.querySelector('#pass');

btn.addEventListener('click',function(){

    if (pass.type == 'text')
    {
        pass.type = 'password';
        btn.innerHTML = "Show Password";
    }
    else
    {
        pass.type = 'text';
        btn.innerHTML = 'Hide Password';
    }


})

    

