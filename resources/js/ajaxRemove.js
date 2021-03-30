window.addEventListener('click', async (event) => {

    const link = event['srcElement'];

    if (link['name'] == 'pop') {
        try {

            let result = await axios.post(removeProduct, {
                id: link['id']
            });
            table.innerHTML = result.data
            results.innerHTML=""
            
        } catch (error) {
            alert(error)
        }
    }

});