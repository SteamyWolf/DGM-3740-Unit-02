let loc = location.href;
console.log(loc)

let links = document.querySelectorAll('ul#primaryNav li a');
// console.log(links)
links.forEach(link => {
    let split = link.href.split('#')
    console.log(split)
    console.log(split[0])
    if (split[0] == location) {
        console.log('found')
        //Test
    }
})