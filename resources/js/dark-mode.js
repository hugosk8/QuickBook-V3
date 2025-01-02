document.addEventListener("DOMContentLoaded", () => {

    const toggleInput = document.getElementById("dark-mode-toggle");
    const body = document.querySelector('body');
    const elementsToToggle = [
        body, 
        document.querySelector('table'), 
        document.querySelector('.form-container'),
        document.querySelector('section.presentation')
    ];

    const savedMode = localStorage.getItem('theme');
    if (savedMode) {
        elementsToToggle.forEach(el => el?.classList.add(savedMode));
        toggleInput.checked = savedMode === 'dark-mode';
    }

    toggleInput.addEventListener("change", () => {
        const isDarkMode = toggleInput.checked;

        elementsToToggle.forEach(el => {
            if (el) {
                el.classList.toggle('dark-mode', isDarkMode);
            }
        });

        const newMode = isDarkMode ? 'dark-mode' : '';
        localStorage.setItem('theme', newMode);
    });
});
