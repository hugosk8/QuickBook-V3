async function getReservedSlots() {
    try {
        const response = await fetch('http://localhost:8000/reserved-slots');

        console.log('Statut de la réponse:', response.status);
        const text = await response.text(); // Récupère le texte brut de la réponse
        console.log('Contenu brut de la réponse:', text);

        // Convertissez en JSON si la réponse est correcte
        const data = JSON.parse(text);
        return data.map(slot => {
            const reservedDate = new Date(slot);
            return new Date(reservedDate.getFullYear(), reservedDate.getMonth(), reservedDate.getDate());
        });
    } catch (error) {
        console.error('Erreur lors de la récupération des créneaux réservés :', error);
        return [];
    }
}
