document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search');
    const searchResults = document.getElementById('search-results');

    searchInput.addEventListener('input', function() {
        const query = searchInput.value;

        if (query.length > 2) { // Rechercher après 3 caractères ou plus            
            fetch(`/search-service?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    // Effacez les résultats précédents
                    searchResults.innerHTML = '';

                    if (data.length > 0) {
                        // Affichez les résultats
                        data.forEach(service => {
                            const li = document.createElement('li');
                            li.textContent = `${service.name}`;
                            searchResults.appendChild(li);
                        });
                    } else {
                        const li = document.createElement('li');
                        li.textContent = 'Aucun résultat trouvé';
                        searchResults.appendChild(li);
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la recherche :', error);
                });
        } else {
            // Vider les résultats si la requête est trop courte
            searchResults.innerHTML = '';
        }
    });
});