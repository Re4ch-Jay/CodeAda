
let convert = () => {
    let markdown = document.querySelector('#markdown').value;

    axios.post('/forums/forum', {markdown})
        .then(res => {
            console.log(res)
            document.querySelector("#html").innerHTML = res.data;
        })
        .catch(err => {
            console.log(err)
        })

        localStorage.setItem("markdown", markdown)
}

let init = () => {
    document.querySelector('#markdown').value = localStorage.getItem('markdown')
    setInterval(convert, 2000)
}

init()
