document.addEventListener("DOMContentLoaded", () => { 
    all_b_send.addEventListener("click", function (e) { 
        e.preventDefault();
        
        let name = all_sf_name.value;
        let tel = all_sf_tel2.value;

        if (tel == "")
        {
            alert("Заполните поля формы")
            return;
        }

        var formData = new FormData();
        formData.append('action', "newsendr");
        formData.append('nonce', allAjax.nonce);
        formData.append('name', name);
        formData.append('tel', tel);

        axios.post(allAjax.ajaxurl, formData)
            .then(function (response) {            
                console.log(response)
                all_sf_name.value = ""
                all_sf_tel2.value = ""

                alert("Ваше мообщение отправлено!")
            })
            .catch(function (error) {
                console.log(error)
                alert("Произошла ошибка попробуйте позднее!")
            })



    })

})