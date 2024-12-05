document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("dark-mode");
    
    button.addEventListener("click", () => {
        const presentation_section = document.querySelectorAll('section.switch');
        const presentation_title = document.querySelectorAll('h2.switch, h3.switch');
        
        Array.from(presentation_section).forEach(element => {
            element.classList.toggle('dark-mode');
        })
        
        Array.from(presentation_title).forEach(element => {
            element.classList.toggle('dark-mode-title');
        })
    })
})