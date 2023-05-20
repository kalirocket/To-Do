const changeListen = {
    checkBoxes: document.querySelectorAll('input[type="checkbox"]'),
    submit: function(){
        this.checkBoxes.forEach(checkElement => 
            {   
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