const changeListen = {
    checkBoxes: document.querySelectorAll('input[type="checkbox"]'),
    
    submit: function(){
        this.checkBoxes.forEach(checkElement => 
            {   
                // Add onclick event to all inputs with anonymous function
                // checkElement is the same as 'this' keyword in the context of event listener
                checkElement.onclick = function (){
                    // checkElement.parentNode.submit();
                    this.parentNode.submit();
                        
                }
            })
    },
    init: function(){
        this.submit();
    }

};

changeListen.init();