function triggerEnter(button_id, inputId) {
    $(inputId).focus(()=>{
        $(inputId).keypress((event)=>{
            if (event.keyCode === 13){
                $(button_id).click();
            }
        })
    })
}
