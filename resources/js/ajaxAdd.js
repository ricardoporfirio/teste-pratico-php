window.addEventListener('click', async (event) => {

    const link = event['srcElement'];

    if (link['name'] == 'pushName' || link['name'] == 'pushCod') {
        try {

            let result = await axios.post(addProduct, {
                type:link['name'],
                id: link['id']
            });
            table.innerHTML = result.data
            results.innerHTML=""
            name.value = "";
        } catch (error) {
            alert(error)
        }
    }

});