let loc = location.href;
let agentLinks = document.querySelectorAll('ul#agentNav li a')
let links = document.querySelectorAll('ul#primaryNav li a');
let mainAgentLink = document.querySelector('a#mainAgentLink')

links.forEach(link => {
    let split = link.href.split('#')
    if (split[0].toString() === location.href.toString() && link.innerHTML !== 'AGENTS') {
        link.classList.add('active')
    }
})

agentLinks.forEach(agentLink => {
    if (agentLink.href.toString() === location.href.toString()) {
        mainAgentLink.classList.add('active')
    }
})

