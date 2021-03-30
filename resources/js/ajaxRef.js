ref.addEventListener('keyup', async (event) => {
    let search = ref.value;

    if(search.length<=4) {
        results.innerHTML=""
    }

    if (search.length > 4) {
        try {

            let result = await axios.post(searchByRef, {
                name: search,
                type:'cod'
            });
            results.innerHTML = result.data
        } catch (error) {
            alert(error)
        }
    }
});
