
    let list = document.querySelector("ul")

    let listElements = list.querySelectorAll("li")

    listElements.forEach(function(element)
    {
        console.dir(element)
        element.style.color = "red"
    })

