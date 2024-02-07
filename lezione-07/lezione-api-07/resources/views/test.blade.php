<x-layout>
    <ul id="lista">

    </ul>

    <script>
        fetch('/api/articoli')
        .then(response=>response.json())
        .then(data=>{
            console.log(data);
            const list = document.getElementById('lista');
            for(let item of data){
                let element = document.createElement('li');
                element.innerHTML += item.titolo;
                list.appendChild(element);
            }
        })
        .catch()

    </script>

</x-layout>