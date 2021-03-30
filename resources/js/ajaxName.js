name.addEventListener('keyup', async (event) => {
    let search = name.value;

    if(search.length<=4) {
        results.innerHTML=""
    }

    if (search.length > 4) {
        try {

            let result = await axios.post(searchByName, {
                name: search,
                type:'name'
            });
            results.innerHTML = result.data
        } catch (error) {
            alert(error)
        }
    }
});
